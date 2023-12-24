@if(session("choose") === "donnees")

    <form action="/inscriptionInfo" method="POST">
        @csrf
        <div>
            <label>Nom: </label>
            <input value="{{ old('nom') }}" name="nom" />
        </div>
        <div>
            <label>Prenom: </label>
            <input value="{{ old("prenom") }}" name="prenom" />
        </div>
        <div>
            <label>Date De Naissance: </label>
            <input value="{{ old("dateDeNaissance") }}" name="dateDeNaissance" type="date" />
        </div>
        <div>
            <label>Addresse: </label>
            <input value="{{ old("addresse") }}" name="addresse" />
        </div>
        <div>
            <label>Telephone: </label>
            <input value="{{ old("telephone") }}" name="telephone" />
        </div>
        <div>
            <label>Diplome: </label>
            <input value="{{ old("diplome") }}" name="diplome" />
        </div>
        <div>
            <label>Email: </label>
            <input value="{{ old("email") }}" name="email" />
        </div>
        <div>
            <button>submit</button>
        </div>
    </form>

@endif

@if(session("choose") == "cv")
    <form action="{{ route("inscrire") }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="cv">CV: </label>
            <input id="cv" name="cv" type="file" />
        </div>
        <div>
            <button type="submit">submit</button>
        </div>
    </form>
@endif

@if(count($errors) > 0)
    {{-- {{ $errors }} --}}
    @foreach($errors->all() as $error)
        {{ $error }}
        <br />
    @endforeach
@endif