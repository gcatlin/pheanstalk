<?php

/**
 * A mockable wrapper around PHP "socket" or "file pointer" access.
 * Only the subset of socket actions required by Pheanstalk are provided.
 *
 * @author Paul Annesley <paul@annesley.cc>
 */
interface Pheanstalk_Socket
{
	/**
	 * Writes data to the socket.
	 * @param string $data
	 */
	public function write($data);

	/**
	 * Reads up to $length bytes from the socket.
	 *
	 * @return string
	 */
	public function read($length);

	/**
	 * Reads up to the next new-line, or $length - 1 bytes.
	 * Trailing whitespace is trimmed.
	 *
	 * @param int
	 */
	public function getLine($length = null);
}
