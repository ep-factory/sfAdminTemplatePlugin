<?php use_javascripts_for_form($form) ?>
<?php use_stylesheets_for_form($form) ?>

<?php if($form->hasGlobalErrors()): ?>
  <div class="notify error">
    <?php echo $form->renderGlobalErrors() ?>
  </div>
<?php endif ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <?php echo $form->renderHiddenFields() ?>
  <p><?php echo $form['username']->renderLabel() ?></p>
  <?php echo $form['username']->render() ?>
  <?php if($form['username']->hasError()): ?>
    <div class="error"><?php echo $form['username']->renderError() ?></div>
  <?php endif ?>
  <p><?php echo $form['password']->renderLabel() ?></p>
  <?php echo $form['password']->render() ?>
  <input type="submit" class="loginbtn noTransform" value="Se connecter" />
  <img src="/sfAdminTemplatePlugin/images/ajax-loader.gif" alt="Chargement..." class="loading" style="display: none;" />
  <?php $routes = $sf_context->getRouting()->getRoutes() ?>
  <?php if (isset($routes['sf_guard_forgot_password'])): ?>
    <br /><p><a href="<?php echo url_for('@sf_guard_forgot_password') ?>" title="Mot de passe oublié ?">Mot de passe oublié ?</a></p>
  <?php endif; ?>
</form>