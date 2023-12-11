<?php 
    $subject = [
        [
            'name' => 'anna',
            'surname' => 'grant',
            'role' => 'partner',
            'phone' => [
                'area_code' => '03',
                'phone_number' => '62229464',
            ],
            'address' => '20 Murray Street, Hobert 7000',
            'domain' => 'bmbtas.com',
        ]
    ];

    function hyphenate($str) {
        return implode("-", str_split($str, 4));
    }
?>


<table style="font-family:sans-serif; color:#9B9DA0;">
<tbody>
  <tr>
    <td>
        <p style="color:#11284B;margin-block-end:2px;"><strong><?php echo ucwords($subject[0]['name'] . ' ' . $subject[0]['surname']); ?></strong></p>
        <p style="margin-block-start:2px;margin-block-end:2px;"><?php echo ucwords($subject[0]['role']); ?></p>
        <p style="margin-block-start:2px;margin-block-end:2px;"><a href="mailto:<?php echo substr($subject[0]['name'], 0, 1) . $subject[0]['surname'] . '@' . $subject[0]['domain']; ?>" style="color: inherit;"><?php echo substr($subject[0]['name'], 0, 1) . $subject[0]['surname'] . '@' . $subject[0]['domain']; ?></a></p>
        <p style="margin-block-start:2px;margin-block-end:2px;">Direct: <a href="tel:<?php echo '+61 ' . ltrim($subject[0]['phone']['area_code'], '0') . ' ' . join("-", str_split($subject[0]['phone']['phone_number'], 4)); ?>" style="color: inherit;"><?php echo '+61 ' . ltrim($subject[0]['phone']['area_code'], '0') . ' ' . join(" ", str_split($subject[0]['phone']['phone_number'], 4)); ?></a></p>
        <p style="margin-block-start:2px;margin-block-end:2px;"><?php echo $subject[0]['address']; ?></p>
        <p style="margin-block-start:2px;"><strong><a href="http://<?php echo $subject[0]['domain']; ?>" target="_blank" style="color:inherit;"><?php echo $subject[0]['domain']; ?></a></strong></p>
    </td>
  </tr>
  <tr>
    <td>
        <img src="https://staging.glooadvertising.com.au/signatures/bmb200/images/BMB_Logos_BMB_Horizontal_Transparent.png" alt="BMB200 Logo" style="margin-block-start:14px;margin-block-end:14px;width:300px;height:auto;">
    </td>
  </tr>
  <tr>
    <td>
        <small>
            <i>
                Notice: This e-mail is confidential. If you are not its intended recipient, you must not read, use, <br>disclose or re-produce it or any of its attachments. Please immediately notify us by return e-mail <br>or telephone, and delete the document
            </i>
        </small>
    </td>
  </tr>
</tbody>
</table>