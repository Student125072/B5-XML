 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <title>XML Personen tabel</title>
   </head>
   <body>

     <?php $xml = new SimpleXMLElement(file_get_contents('personen.xml')); ?>
     <table class="table table-striped">
       <thead class="thead-dark">
         <th>Name</th>
         <th>Gender</th>
         <th>Height in cm</th>
         <th>Haircolor</th>
         <th>Eyecolor</th>
       </thead>

       <?php foreach ($xml as $person): ?>
         <tr>
           <td><?php echo $person->name; ?></td>
           <td><?php echo $person->gender; ?></td>
           <td><?php echo $person->height; ?></td>
           <td><?php echo $person->haircolor; ?></td>
           <td><?php echo $person->eyecolor; ?></td>
         </tr>
       <?php endforeach; ?>

     </table>

   </body>
 </html>
