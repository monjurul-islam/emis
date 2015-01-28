<!--/**
 * new module view
 *
 * This view shows newlly added modules data
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>New Module Added Success! <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/add_module">Create New</a></h2>
<hr/>
<h3>New Modules Details</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Type</th>
      <th>URL ALIAS</th>
      <th>Created by</th>
      <th>Created dt</th>
      <th>Status</th>
      <th> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $name; ?></td>
      <td><?php echo $type; ?></td>
      <td><?php echo $url_alias; ?></td>
      <td><?php echo $created_by; ?></td>
      <td><?php echo $created_dt; ?></td>
      <td><?php echo $status; ?></td>
    </tr>
  </tbody>
</table>
