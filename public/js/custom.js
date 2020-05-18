$(document).ready(function(){
    $.datetimepicker.setLocale('ru');

    $('#birthday').datetimepicker({
        i18n:{
            ru:{
                months:[
                    'Январь','Февраль','Март','Апрель',
                    'Май','Июнь','Июль','Август',
                    'Сентябрь','Октябрь','Ноябрь','Декабрь',
                ],
                dayOfWeek:[
                    'Пн', 'Вт', 'Ср',
                    'Чт', 'Пт', 'Сб',
                    'Вс'
                ]
            }
        },
        timepicker:false,
        format:'Y-m-d'
    });
});
