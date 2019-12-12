<?php
/**
 * @author denis303 <dev@denis303.com>
 * @license MIT
 * @link http://denis303.com
 */
namespace denis303\traits;

use Exception;

trait RenderFileTrait
{

    public function renderFile($filename, array $params = [])
    {
        extract($params);

        ob_start();

        require($filename);

        $return = ob_get_contents();

        ob_end_clean();

        return $return;
    }

}