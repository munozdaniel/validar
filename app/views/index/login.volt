{{ content() }}
{{ form('index/iniciar','method':'post') }}
<div style="margin:10% 0 0 40%;">
    <label for="username">Nombre de Usuario</label>
    <div>
        {{ text_field("username") }}
    </div>
    <label for="password">Password</label>
    <div>
        {{ password_field("password") }}
    </div>
    <label for="name">Nombre </label>
    <div>
        {{ text_field("name") }}
    </div>
    <label for="email">Email </label>
    <div>
        {{ email_field("email") }}
    </div>

    {{ submit_button() }}
</div>
{{ end_form() }}