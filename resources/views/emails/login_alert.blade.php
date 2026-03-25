<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; max-width: 600px; 
             margin: auto; padding: 20px; background: #f9f9f9;">
    <div style="background: white; padding: 30px; border-radius: 8px; 
                border-top: 4px solid #dc2626;">
        <h2 style="color: #dc2626;">⚠️ Alerta de inicio de sesión</h2>
        <p style="color: #555;">Hola <strong>{{ $user->name }}</strong>,</p>
        <p style="color: #555;">
            Se ha detectado un nuevo inicio de sesión en tu cuenta de 
            <strong>Activity-9</strong>.
        </p>
        <table style="width: 100%; background: #fef2f2; border-radius: 6px; 
                      padding: 12px; margin: 16px 0;">
            <tr>
                <td style="color: #666;">📧 Email:</td>
                <td style="color: #333;"><strong>{{ $user->email }}</strong></td>
            </tr>
            <tr>
                <td style="color: #666;">🕐 Fecha:</td>
                <td style="color: #333;">
                    <strong>{{ now()->format('d/m/Y H:i') }}</strong>
                </td>
            </tr>
        </table>
        <p style="color: #555;">
            Si fuiste tú, puedes ignorar este mensaje.<br>
            Si <strong>NO</strong> fuiste tú, cambia tu contraseña de inmediato.
        </p>
        <hr style="margin: 24px 0; border: none; border-top: 1px solid #eee;">
        <p style="color: #aaa; font-size: 12px;">
            Este es un correo automático, no respondas a este mensaje.
        </p>
    </div>
</body>
</html>