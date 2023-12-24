<form method="post" action="/choose">
    @csrf
    <div>
        <input name="typeSaisir" value="donnees" type="radio"  />
        <label>saisir mes données</label>
    </div>
    
    <div>
        <input name="typeSaisir" value="cv" type="radio"  />   
        <label>attacher mon CV</label>
    </div>

    <button>check</button>
</form>