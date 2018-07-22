
jQuery(function ($) {
  $(document).ready(function ($) {

    $('#true_loadmore').click(function () {
      $(this).text('Завантажується') // изменяем текст кнопки, вы также можете
      // добавить прелоадер
      $.ajax({
        url: social_worker_ajax_url, // обработчик
        data: {
          'action': 'loadmore',
          'query': social_worker_true_posts,
          'page': social_worker_current_page
        }, // данные
        type: 'POST', // тип запроса
        success: function (data) {
          if (data) {
            $('#true_loadmore').text('Читати далі').before(data) // вставляем
            // новые посты
            social_worker_current_page++ // увеличиваем номер страницы на единицу
            if (social_worker_current_page == social_worker_max_pages) {
              $('#true_loadmore').remove()
            } // если последняя страница, удаляем кнопку
          }
          else {
            $('#true_loadmore').remove() // если мы дошли до последней
            // страницы постов, скроем кнопку
          }
        }
      })
    })

    $('#true_button').click(function () {
      $(this).text('Завантажується') // изменяем текст кнопки, вы также можете
      // добавить прелоадер
      $.ajax({
        url: psychologist_ajaxurls, // обработчик
        data: {
          'action': 'loads',
          'query': psychologist_true_posts,
          'page': psychologist_current_page
        }, // данные
        type: 'POST', // тип запроса
        success: function (data) {
          if (data) {
            $('#true_button').text('Читати далі').before(data) // вставляем
            // новые посты
            psychologist_current_page++ // увеличиваем номер страницы на единицу
            if (psychologist_current_page == psychologist_max_pages) {
              $('#true_button').remove()
            } // если последняя страница, удаляем кнопку
          }
          else {
            $('#true_button').remove() // если мы дошли до последней страницы
                                       // постов, скроем кнопку
          }
        }
      })
    })

    $('#jurist_load').click(function () {
      $(this).text('Завантажується') // изменяем текст кнопки, вы также можете
      // добавить прелоадер
      $.ajax({
        url: jurist_ajaxurls, // обработчик
        data: {
          'action': 'loading',
          'query': jurist_true_posts,
          'page': jurist_current_page
        }, // данные
        type: 'POST', // тип запроса
        success: function (data) {
          if (data) {
            $('#jurist_load').text('Читати далі').before(data) // вставляем
            // новые посты
            jurist_current_page++ // увеличиваем номер страницы на единицу
            if (jurist_current_page == jurist_max_pages) {
              $('#jurist_load').remove()
            } // если последняя страница, удаляем кнопку
          }
          else {
            $('#jurist_load').remove() // если мы дошли до последней страницы
                                       // постов, скроем кнопку
          }
        }
      })
    })


  })
})

