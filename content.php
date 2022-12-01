<?php
function files($id,$name,)
{
    $element ="
    <tr class=\"\">
    <td scope=\"row\">$name</td>
    <td>$id</td>
    <td><form action=\"\" method=\"post\"><button type=\"submit\"
    name=\"go\"
    class=\"btn btn-sm btn-success\"
    style=\"margin-left: 10px\">Edit</button>
    <button
      type=\"submit\"
      name=\"go\"
      class=\"btn btn-sm btn-danger\"
      style=\"margin-left: 10px\"
    >
      Delete
    </button>
    <button
      type=\"submit\"
      name=\"go\"
      class=\"btn btn-sm btn-warning\"
      style=\"margin-left: 10px\"
    >
      View Files
    </button>
    </form>
    </td>
</tr>
    ";
    echo $element;
}


function Folder($name,$type,$Fid,$date,$id)
{
    $element ="
    <tr class=\"\">
    <td scope=\"row\">$name</td>
    <td>$type</td>
    <td>$Fid</td>
    <td>$date</td>
    <td><form action=\"\" method=\"post\"><button type=\"submit\"
    name=\"go\"
    class=\"btn btn-sm btn-success\"
    style=\"margin-left: 10px\">Edit</button>
    <button
      type=\"submit\"
      name=\"go\"
      class=\"btn btn-sm btn-danger\"
      style=\"margin-left: 10px\"
    >
      Delete
    </button>
    <button
      type=\"submit\"
      name=\"add\"
      class=\"btn btn-sm btn-warning\"
      style=\"margin-left: 10px\"
    >
      View File
    </button>
    <input type=\"hidden\" name=\"id\" value=\"$id\">
    </form>
    </td>
</tr>
    ";
    echo $element;
}


?>