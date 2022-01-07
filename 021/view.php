<!-- VIEW -->
<table border="1">
    <tr>
        <td> MAHANG </td>
        <td> <?php echo $product->MAHANG;?> </td>
    </tr>
    <tr>
        <td> TENHANG </td>
        <td>  <?php echo $product->TENHANG;?> </td>
    </tr>
    <tr>
        <td> MACONGTY </td>
        <td> <?php echo $product->MACONGTY;?> </td>
    </tr>
</table>
<br>
<form action="" method="post">
    <input type="text" name="TENHANG">
    <button type="submit">Them</button>
</form>