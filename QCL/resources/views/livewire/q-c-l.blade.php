<div class="container text-center">
    <br><br>
    <h1>قُرْآنٌ يكملُ بعضهُ بعضاً</h1>
    <small>ٌ موقع يختار عدد من ايات من القران (من مجموعة سور) ويعرضها سوية, في حدود الامكان يمكن للايات المدمجة من عدة سور ان تعطي معنى اخر</small>
    <br>
    <small>طريقة اختيار الايات والسور طريقة عشوائية ولا يوجد اي خوارزمية لطريقة اختيار الايات</small>
    <br>
    <br>

    @if(!$verses)
    <label class='h3'>أختر عدد الايات </label>
    <br>
    <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group" role="group" aria-label="First group">
            <button wire:click="getAyat(3)" type="button" class="btn btn-secondary">3</button>
            <button wire:click="getAyat(4)" type="button" class="btn btn-secondary">4</button>
            <button wire:click="getAyat(5)" type="button" class="btn btn-secondary">5</button>
        </div>
    </div>
    <br>

    <br><br>
    @else
    <div class="card border-primary mb-3 ">
        <div class="card-header">الايات</div>
        <div class="card-body text-primary">

            <p class="card-text text-dark h2">{{$verses}}</p>
        </div>
    </div>
    <button wire:click="resetVers" type="button" class="btn btn-secondary">اعادة</button>
    @endif



</div>
