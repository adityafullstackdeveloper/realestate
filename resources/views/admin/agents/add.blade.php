<div class="content-wrapper"> 
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Agent</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-agent" method="POST" action="{!! action('Admin\AgentController@store') !!}">
        {{csrf_field()}}

        <div class="form-group">
          <label for="image">Agent's Image:</label>
          <div>
              <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="image" type="file">
          </div>
          <div>
            <img style="max-width: 250px;" src="{{asset('assets/img/avatar.png')}}" id="adminimg" alt="No Featured Image Added">
          </div>
       </div> 
       <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Agent Name:</label>
            <input type="text" class="form-control" placeholder="Enter Agents Name..." name="name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Agent email:</label>
            <input type="email" class="form-control" placeholder="Enter Agents email..." name="email">
          </div>
        </div> 
       </div>   
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Agent's address:</label>
              <input type="text" class="form-control" placeholder="Enter Agents address" name="address">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Agent's mobile:</label>
                <input type="text" class="form-control" placeholder="Enter Agents Mobile" name="mobile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label>Agent's Designation:</label>
            <input type="text" class="form-control" placeholder="Enter Agents Designation" name="designation">
         </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                <label>Commission:</label>
                <input type="text" class="form-control" placeholder="Enter Commission" name="commission">
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="{{url('admin/agent')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-agent"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@section('requirejs')
<script type="text/javascript">

  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#adminimg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endsection