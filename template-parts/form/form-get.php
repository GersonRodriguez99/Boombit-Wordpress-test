

<section class="form-container">
<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  class="row g-3">
    <div class="col-12">
        <h1 class="text-center"> Registrate para participar </h1> 
    </div>
  <div class="col-12">
    <label for="email-address" class="form-label">Correo</label>
    <input type="email" name="email-address" class="form-control" id="email-address" maxlength="150" aria-describedby="emailHelp"
    value="<?php echo isset($inputs['email-address']) ? htmlspecialchars($inputs['email-address']) : '' ?>" 
    >
    <div id="emailHelp" class="form-text"><?php echo $errors['email-address'];?></div>
  </div>
  <div class="col-md-6">
    <label for="user-document"  class="form-label">Cedula</label>
    <input type="text" maxlength="16" name="user-document" class="form-control" id="user-document"
    value="<?php echo isset($inputs['user-document']) ? htmlspecialchars($inputs['user-document']) : '' ?>" >
    <div  class="form-text"><?php echo $errors['user-document'] ?? '' ?></div>
  </div>
  <div class="col-md-6">
    <label for="user-name"  class="form-label">Nombre y Apellido</label>
    <input type="text" name="user-name" maxlength="100" class="form-control" id="user-name"
    value="<?php echo isset($inputs['user-name']) ? htmlspecialchars($inputs['user-name']) : '' ?>">
    <div  class="form-text"><?php echo $errors['user-name'] ?? '' ?></div>
  </div>
  <div class="col-md-6">
    <label for="user-phone" class="form-label">Telefono</label>
    <input type="text" name="user-phone" class="form-control" maxlength="8" id="user-phone"
    value="<?php echo isset($inputs['user-phone']) ? htmlspecialchars($inputs['user-phone']) : '' ?>">
  </div>
  <div class="col-md-6">
    <label for="invoice-number" class="form-label">Numero de la Factura</label>
    <input type="text" name="invoice-number" class="form-control"  maxlength="10" id="invoice-number"
    value="<?php echo isset($inputs['invoice-number']) ? htmlspecialchars($inputs['invoice-number']) : '' ?>">
    <div  class="form-text"><?php echo $errors['invoice-number'] ?? '' ?></div>
  </div>
  <div class="col-md-6">
    <label for="amount" class="form-label">Monto de la compra</label>
    <input type="number"  name="amount" step="0.01" min=0 class="form-control" id="amount"
    value="<?php echo isset($inputs['amount']) ? htmlspecialchars($inputs['amount']) : '' ?>">
  </div>
  <div class="col-md-6">
    <label for="invoice-date" class="form-label">fecha de la compra</label>
    <input type="date" name="invoice-date" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="invoice-date"
    value="<?php echo isset($inputs['invoice-date']) ? htmlspecialchars($inputs['invoice-date']) : '' ?>">

  </div>
  <button type="submit" class="btn btn-dark" name="submit" value="Submit">Enviar</button>
</form>
</section>



