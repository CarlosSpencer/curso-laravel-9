 <!-- {{ csrf_token() }} caso queira consultar o token para o metodo post -->
 @csrf <!-- obrigatorio para metodo post para evitar ataques CSRF -->
 <input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
 <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email')  }}">
 <input type="password" name="password" placeholder="Senha:">
 <button type="submit">Enviar</button>


 