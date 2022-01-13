                <!-- <tr>
                    <td><?php echo $personne[0]; ?></td>
                    <td><?php echo $personne[1]; ?></td>
                    <td><?php echo $personne[2]; ?></td>
                    <td><?php echo $personne[3]; ?></td>
                    <td><?php echo $personne[5]; ?></td>
                    <td><?php echo $personne[6]; ?></td>
                    <td><?php echo $personne[7]; ?></td>
                    &lt;script&gt;alert(&quot;vous avez choppez un virus, rendez-vous &agrave; cette adresse pour vous faire d&eacute;sinfecter !&quot;);&lt;/script&gt;
                </tr> -->
                <tr>
                    <?php for($i=0;$i<=7;$i++){
                        if($i != 4){
                            echo "<td>$personne[$i]</td>";
                        }
                    } ?>
                </tr>