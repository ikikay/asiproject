@section('script')
<!-- gijgo datepicker -->
<script src="{{url('js/datepicker/bootstrap-datepicker3-1.8.0.min.js') }}"></script>

<script>
$(document).ready(function () {
    //Date picker
    $.fn.datepicker.dates['fr'] = {
        days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
        daysShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
        daysMin: ["di", "lu", "ma", "me", "je", "ve", "sa"],
        months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
        monthsShort: ["janv.", "févr.", "mars", "avril", "mai", "juin", "juil.", "août", "sept.", "oct.", "nov.", "déc."],
        today: "Aujourd'hui",
        monthsTitle: "Mois",
        clear: "Effacer",
        weekStart: 1,
        format: "dd/mm/yyyy"};

    $('.datepicker').datepicker({
        autoclose: true,
        language: "fr"
    });
    
    var moisPreselectionne = new Date();
    moisPreselectionne.setDate({{ $jours }});
    moisPreselectionne.setMonth({{ $mois }} -1);
    moisPreselectionne.setFullYear({{ $annee }});
    $(".datepicker").datepicker("update", moisPreselectionne);
   
});

$(document).on('click', '#input_datepicker_previsionnel', (function () {
    $('#datepicker_previsionnel').focus();
}));

</script>
@stop