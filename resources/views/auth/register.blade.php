<x-layout>
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
        <form action="/register" method="post">
            @csrf
            <legend class="fieldset-legend">Registro</legend>

            <label class="label">Nombre</label>
            <input type="text" class="input" placeholder="Nombre" name="name" />

            <label class="label">Email</label>
            <input type="email" class="input" placeholder="Email" name="email" />

            <label class="label">Password</label>
            <input type="password" class="input" placeholder="Password" name="password" />

            <button type="submit" class="btn btn-neutral mt-4">Registrarse</button>
        </form>
    </fieldset>
</x-layout>