<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="details">{{ $market->name }} ' s</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <h3>{{ $market->name }}</h3>
        <ul>
         <li>Location City: {{ $market->city }}</li>
         <li>Website: {{ $market->website }}</li>
       </ul>

     </div>

     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>

   </div>
 </div>
</div>
