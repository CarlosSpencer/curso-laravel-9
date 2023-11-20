 <!-- {{ csrf_token() }} caso queira consultar o token para o metodo post -->
 @csrf <!-- obrigatorio para metodo post para evitar ataques CSRF -->
<div class="w-full bg-white shadow-md rounded px-8 py-6">
 <textarea name="body" id="" cols="30" rows="10" placeholder="Comentário"
 class="form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-7ee
    bg-white bg-clip-padding
    border border-solid border-gray-3ee
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-7ee focus:bg-white focus:border-black
 "></textarea>
 <label for="visible">
    <input type="checkbox" name="visible" id="">
    Visível?
 </label>
 <button type="submit" class="bg-purple-500 hover:bg-purple-400 text-white px-3 py-2 rounded-lg w-1/2 my-5 mx-2 max-w-xs">Enviar</button>
</div>


 