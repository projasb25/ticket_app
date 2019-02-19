<table class="table table-striped">
  <thead style="background-color:#C4C4C4">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Satus</th>
      <th scope="col">Subject</th>
      <th scope="col">Raised By</th>
      <th scope="col">Category</th>
      <th scope="col">Assigned</th>
      <th scope="col">Priority</th>
      <th scope="col">Date Updated</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!$tickets) { ?>
        <tr>
            <td colspan="9" style="text-align:center">No data found</td>
        </tr>
    <?php } else {
                foreach($tickets as $ticket){
                    switch($ticket->status) 
                        { case 'PG':
                            $status_class = 'primary'; 
                            break; 
                        case 'CP':
                            $status_class = 'success';
                            break;
                        default:
                            $status_class = 'info';
                        } /* endswitch */ ?>
                    <tr>
                        <th scope="row"><?=$ticket->id_ticket;?></th>
                        <td><span class="badge badge-<?=$status_class?>" data-toggle="tooltip" data-placement="top" title="Progress" style="cursor: default"><?=$ticket->status;?></span></td>
                        <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?=$ticket->subject;?></a></td>
                        <td><?=$ticket->created_by;?></td>
                        <td><?=$ticket->category;?></td>
                        <td><?=$ticket->assigned_to;?></td>
                        <td><?=$ticket->priority;?></td>
                        <td><?=$ticket->date_updated;?></td>
                        <td><a href="<?=base_url().'tickets/edit/'.$ticket->id_ticket;?>">Edit</a></td>
                    </tr>
    <?php       }/* endforeach */
            }/* endif */ 
    ?>              
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
