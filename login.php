<?php

// تحقق من اسم المستخدم وكلمة المرور
if (isset($_POST['seif']) && isset($_POST['1111'])) {
  $username = $_POST['seif'];
  $password = $_POST['1111'];

  // تحقق من اسم المستخدم وكلمة المرور في قاعدة البيانات
  // ...

  // إذا كانا صحيحين، فقم بتوجيه المستخدم إلى الصفحة الأخرى
  if ($isValid) {
    header('Location: my-page.html');
    exit();
  }
}

// إذا كان اسم المستخدم وكلمة المرور غير صحيحين، فقم بعرض رسالة خطأ
else {
  echo '<p>اسم المستخدم أو كلمة المرور غير صحيحة.</p>';
}

?>