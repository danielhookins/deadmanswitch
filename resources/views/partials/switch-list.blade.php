<div class="panel panel-default">
  <div class="panel-heading">Switch List</div>
  <div class="panel-body">
    <p>Here are all of your switches</p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th></th>
          <th>Switch Title</th>
          <th>Created</th>
          <th>Updated</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($switches as $switch)
        <tr>
          <td><!--{{ $switch->id }}--></td>
          <th scope="row"><a href="/switch/{{ $switch->id }}">{{ $switch->title }}</a></th>
          <td>{{ $switch->created_at }}</td>
          <td>{{ $switch->updated_at }}</td>
          <td>[ <a href="/switch/{{ $switch->id }}/edit">Edit</a> ]</td>
          <td>[ <a href="/switch/{{ $switch->id }}/delete">Delete</a> ]</td>
        </tr>
        @empty
        <td></td>
        <th scope="row"><em>You haven't created any switches yet.</em></th>
        @endforelse
      </tbody>
      <!--<tbody> -->
        <td></td>
        <td><a href="/switch/create">Create new switch</a></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      <!--</tbody> -->
    </table>
  </div><!--/panel-body -->
</div><!--/panel-->