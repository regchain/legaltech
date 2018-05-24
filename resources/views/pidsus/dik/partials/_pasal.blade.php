    <table class="table table-striped table-bordered">
      @forelse ($surat_pasal as $pasal)
      <tr>
        <td width="100%" colspan="4">
          <div>
            <div class="medi col-md-12a"> 
              <div class="btn-group-vertical btn-group-xs pull-right" role="group" aria-label="...">
                  <a href='{{ url('/surat_pasal', [$pasal->id, $tipe, $kasus_id]) }}' class="btn btn-danger"> BATAL &nbsp;
                    <i class="glyphicon glyphicon-log-in"></i>
                  </a>
              </div>
            </div>
            <div class="media-body">
              <strong class="media-heading">{{ $pasal->pasal_name }}</strong>
            </div>
            </div></div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>