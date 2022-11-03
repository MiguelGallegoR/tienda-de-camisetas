<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'completed'): ?>
<h1>Tu pedido ha sido confirmado</h1>
<p>
    Tu pedido ha sido guardado con éxito, una vez hayas hecho el pago será procesado y enviado.
</p>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'completed'): ?>
    <h1>Tu pedido no ha podido procesarse</h1>
<?php endif; ?>