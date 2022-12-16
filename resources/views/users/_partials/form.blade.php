 <!-- {{ csrf_token() }} caso queira consultar o token para o metodo post -->
 @csrf <!-- obrigatorio para metodo post para evitar ataques CSRF -->
<div class="flex flex-col">
 <input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}" class="shadow p-2 m-2 max-w-md">
 <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email')  }}" class="shadow p-2 m-2 max-w-md">
 <input type="password" name="password" placeholder="Senha:" class="shadow p-2 m-2 max-w-md">
 <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white px-3 py-2 rounded-lg w-1/2 my-5 mx-2 max-w-xs">Enviar</button>
</div>


 