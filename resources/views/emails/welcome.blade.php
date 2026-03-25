<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; max-width: 600px; 
             margin: auto; padding: 20px; background: #f9f9f9;">
    <div style="background: white; padding: 30px; border-radius: 8px; 
                border-top: 4px solid #4f46e5;">
        <h2 style="color: #4f46e5;">¡Bienvenido, {{ $user->name }}! 🎉</h2>
        <p style="color: #555;">
            Tu cuenta ha sido creada exitosamente en <strong>Activity-9</strong>.
        </p>
        <p style="color: #555;">
            Ya puedes acceder al sistema con tu email y contraseña.
        </p>
        <a href="{{ url('/dashboard') }}"
           style="display: inline-block; background: #4f46e5; color: white;
                  padding: 12px 24px; border-radius: 6px; text-decoration: none;
                  margin-top: 16px;">
            Ir al Dashboard →
        </a>
        <hr style="margin: 24px 0; border: none; border-top: 1px solid #eee;">
        <p style="color: #aaa; font-size: 12px;">
            Este es un correo automático, no respondas a este mensaje.
        </p>
    </div>
</body>
</html>