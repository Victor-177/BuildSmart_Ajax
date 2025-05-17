// Файл: script.js

// Дожидаемся загрузки DOM
document.addEventListener("DOMContentLoaded", function() {

  // --- Функция показа модального окна через Bootstrap Modal (только для ошибок) ---
  function showModal(заголовок, сообщение) {
    const modalId = 'feedbackModal';
    const existingModal = document.getElementById(modalId);
    if (existingModal) {
      existingModal.remove();
    }

    const modalHtml = `
      <div class="modal fade" id="${modalId}" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTitle">${заголовок}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ${сообщение}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div>`;
    document.body.insertAdjacentHTML('beforeend', modalHtml);
    $('#' + modalId).modal('show');
    $('#' + modalId).on('hidden.bs.modal', function () {
      $(this).remove();
    });
  }

  // --- Загрузка и отображение списка заявок ---
  function loadRequests() {
    $.ajax({
      url: 'ajax.php',
      method: 'GET',
      dataType: 'json'
    }).done(function(response) {
      if (response.status === 'success') {
        const списокЗаявок = response.requests;
        const контейнер = $('#requests-list');
        контейнер.empty();
        if (списокЗаявок.length === 0) {
          контейнер.append('<li class="list-group-item">Заявок пока нет.</li>');
        } else {
          списокЗаявок.forEach(function(заявка) {
            const элемент = `
              <li class="list-group-item">
                <strong>${заявка.name}</strong> (${заявка.phone})<br>
                <em>${заявка.created_at}</em><br>
                ${заявка.question}
              </li>`;
            контейнер.append(элемент);
          });
        }
      } else {
        showModal('Ошибка', 'Не удалось получить список заявок.');
      }
    }).fail(function() {
      showModal('Ошибка', 'Сетевой сбой при получении списка заявок.');
    });
  }

  // --- Обработчик отправки формы через AJAX ---
  $('.request-form').on('submit', function(event) {
    event.preventDefault();

    const имя    = $('#name').val().trim();
    const вопрос = $('#question').val().trim();
    const телефон = $('#phone').val().trim();

    if (!имя || !вопрос || !телефон) {
      showModal('Ошибка', 'Заполните, пожалуйста, все обязательные поля.');
      return;
    }

    const phoneRegex = /^\+?[0-9\s\-]{7,}$/;
    if (!phoneRegex.test(телефон)) {
      showModal('Ошибка', 'Неверный формат номера телефона.');
      return;
    }

    $.ajax({
      url: 'ajax.php',
      method: 'POST',
      data: { name: имя, question: вопрос, phone: телефон },
      dataType: 'json'
    }).done(function(response) {
      if (response.status === 'success') {
        // УСПЕШНО: просто сбрасываем форму и обновляем список
        $('.request-form')[0].reset();
        loadRequests();
      } else {
        // ОШИБКА ОТ СЕРВЕРА
        showModal('Ошибка', response.message || 'Не удалось сохранить заявку.');
      }
    }).fail(function() {
      showModal('Ошибка', 'Сетевой сбой при сохранении заявки.');
    });
  });

  // --- Инициализируем загрузку списка и таймер ---
  $('#refresh-requests').on('click', loadRequests);
  loadRequests();
  setInterval(loadRequests, 60 * 1000); // обновлять каждую минуту

});
