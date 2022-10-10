

<?php
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<select style="border-style: none;font-weight: bold;" id="filter" name="filteer">
  <option style="font-weight:bold" value="" disabled="" selected>Tout afficher</option>
  <option style="font-weight:bold;" value="Restaurant">Restaurant</option>
  <option style="font-weight:bold;" value="Recette">Recette</option>
  <option style="font-weight:bold;" value="Retour d\'experience">Retour d'exp</option>
  <option style="font-weight:bold;" value="Conseil">Conseil</option>
</select>
</body>
<?php
?>

<script>
  $(document).ready(function(){
    $("#filter").on('change', function(){
      var value = $(this).val();
      // alert(value);

      $.ajax({
        url:"filter.php",
        type:'POST',
        data:'request='+value,
        //  beforeSend:function(){
        //    $(".amg_car").html('<span>Working....</span>');
        //  },
        success:function(data){
          $(".amg_car").html(data);
        },
      });
    });
  });
</script>