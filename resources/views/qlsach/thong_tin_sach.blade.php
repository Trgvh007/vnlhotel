<html>
<head>

    <style>

    table {
    border-collapse: collapse;
        }
        </style>

</head>
<body>

 <table border ="1"> 
     <tr> 
         <th> Tieu de </th>
         <th> Tac gia </th>
     </tr>
         <?php
     foreach($sach as $row)
    {
        ?>
        <tr>
        <td> <?php echo $row->tieu_de; ?> </td>
        <td> <?php echo $row->tac_gia; ?> </td>
        </tr>
        <?php
    }?>
 </table>
</body>
</html>
