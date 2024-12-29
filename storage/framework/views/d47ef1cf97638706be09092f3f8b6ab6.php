<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #007bff;
        }

        .login-container {
            background-color: #ffffff;
            width: 360px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container .icon {
            width: 35px;
            height: 40px;
            margin: 0 auto 20px;
            background-color: #007bff;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }

        .login-container h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333333;
        }

        .input-container {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .input-container input {
            width: 100%;
            padding: 10px;
            padding-right: 35px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .input-container input:focus {
            outline: none;
            border-color: #007bff;
        }

        /* Style untuk input yang error */
        .input-container input.is-invalid {
            border-color: #dc3545;
            background-color: #f8d7da;
        }

        /* Ikon tanda seru untuk input error */
        .input-container .error-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #dc3545;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-container button i {
            margin-right: 5px;
        }

        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin: -13px 0 10px 0;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="icon"></div>
        <h2>Employee Data Master</h2>

        <!-- Form Login -->
        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="line" style="height: 1px; background-color: #ddd; margin: 10px 0 20px 0;"></div>

            <!-- Input Email -->
            <div class="input-container">
                <input type="email" name="email" id="email" placeholder="Enter Your Email"
                       class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       value="<?php echo e(old('email')); ?>" required>
                <!-- Ikon tanda seru -->
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error-icon"><i class="fas fa-exclamation-circle"></i></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error-message" id="email-error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <!-- Input Password -->
            <div class="input-container">
                <input type="password" name="password" id="password" placeholder="Enter Your Password"
                       class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                <!-- Ikon tanda seru -->
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error-icon"><i class="fas fa-exclamation-circle"></i></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error-message" id="password-error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="line" style="height: 1px; background-color: #ddd; margin: 10px 0 25px 0;"></div>

            <button type="submit">
                <i class="fa-solid fa-right-to-bracket"></i> Log In
            </button>
        </form>
    </div>

    <script>
        // Fungsi untuk menghapus error ketika pengguna mulai mengetik ulang
        document.addEventListener('DOMContentLoaded', function () {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            // Fungsi untuk menghapus error pada input
            const removeError = (inputId, errorMessageId) => {
                const input = document.getElementById(inputId);
                const errorMessage = document.getElementById(errorMessageId);

                input.addEventListener('input', function () {
                    if (input.classList.contains('is-invalid')) {
                        input.classList.remove('is-invalid');
                    }
                    if (errorMessage) {
                        errorMessage.style.display = 'none';
                    }
                    const errorIcon = input.parentElement.querySelector('.error-icon');
                    if (errorIcon) {
                        errorIcon.style.display = 'none';
                    }
                });
            };

            // Terapkan fungsi untuk email dan password
            removeError('email', 'email-error');
            removeError('password', 'password-error');
        });
    </script>
</body>

</html>
<?php /**PATH D:\xampp\Modul 18\resources\views/auth/login.blade.php ENDPATH**/ ?>