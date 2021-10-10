<div class="container text-center">
    <br><br>
    <h1>قُرْآنٌ يكملُ بعضهُ بعضاً</h1>
    <small>ٌ موقع يختار عدد من ايات من القران (من مجموعة سور) ويعرضها سوية, احدى معجزات القران انه يكمل بعضه بعضا. </small>
    <br>
    <br>

    <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group" role="group" aria-label="First group">
            <button wire:click="getAyat(3)" type="button" class="btn btn-secondary">3</button>
            <button wire:click="getAyat(4)" type="button" class="btn btn-secondary">4</button>
            <button wire:click="getAyat(5)" type="button" class="btn btn-secondary">5</button>
        </div>
    </div>
    <br>

    <button wire:click="resetVers" type="button" class="btn btn-secondary">reset</button>
    <br><br>
    @if($verses)
    <div class="card border-primary mb-3 ">
        <div class="card-header">الايات</div>
        <div class="card-body text-primary">

            <p class="card-text text-dark h2">{{$verses}}</p>
        </div>
    </div>
    @endif

</div>
