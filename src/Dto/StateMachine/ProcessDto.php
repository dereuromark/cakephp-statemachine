<?php
/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace StateMachine\Dto\StateMachine;

use PhpCollective\Dto\Dto\AbstractDto;

/**
 * StateMachine/Process DTO
 *
 * @property string|null $processName
 * @property string|null $stateMachineName
 */
class ProcessDto extends AbstractDto
{
	/**
	 * @var string
	 */
	const FIELD_PROCESS_NAME = 'processName';
	/**
	 * @var string
	 */
	const FIELD_STATE_MACHINE_NAME = 'stateMachineName';
	/**
	 * @var string|null
	 */
	protected ?string $processName = null;
	/**
	 * @var string|null
	 */
	protected ?string $stateMachineName = null;
	/**
	 * Some data is only for debugging for now.
	 *
	 * @var array<string, array<string, mixed>>
	 */
	protected array $_metadata = [
		'processName' => [
			'type' => 'string',
			'name' => 'processName',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serialize' => null,
			'factory' => null,
			'mapFrom' => null,
			'mapTo' => null,
		],
		'stateMachineName' => [
			'type' => 'string',
			'name' => 'stateMachineName',
			'required' => false,
			'defaultValue' => null,
			'dto' => null,
			'collectionType' => null,
			'associative' => false,
			'key' => null,
			'serialize' => null,
			'factory' => null,
			'mapFrom' => null,
			'mapTo' => null,
		],
	];
	/**
	* @var array<string, array<string, string>>
	*/
	protected array $_keyMap = [
		'underscored' => [
			'process_name' => 'processName',
			'state_machine_name' => 'stateMachineName',
		],
		'dashed' => [
			'process-name' => 'processName',
			'state-machine-name' => 'stateMachineName',
		],
	];

	/**
	 * Whether this DTO is immutable.
	 */
	protected const IS_IMMUTABLE = false;

	/**
	 * Pre-computed setter method names for fast lookup.
	 *
	 * @var array<string, string>
	 */
	protected static array $_setters = [
		'processName' => 'setProcessname',
		'stateMachineName' => 'setStatemachinename',
	];

	/**
	 * Optimized array assignment without dynamic method calls.
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return void
	 */
	protected function setFromArrayFast(array $data): void
	{
		if (isset($data['processName'])) {
			$this->processName = $data['processName'];
			$this->_touchedFields['processName'] = true;
		}
		if (isset($data['stateMachineName'])) {
			$this->stateMachineName = $data['stateMachineName'];
			$this->_touchedFields['stateMachineName'] = true;
		}
	}

	/**
	 * Optimized setDefaults - only processes fields with default values.
	 *
	 * @return $this
	 */
	protected function setDefaults()
	{

		return $this;
	}

	/**
	 * Optimized validate - only checks required fields.
	 *
	 * @throws \InvalidArgumentException
	 *
	 * @return void
	 */
	protected function validate(): void
	{
	}
	/**
	 * @param string|null $processName
	 *
	 * @return $this
	 */
	public function setProcessName(?string $processName = null)
	{
		$this->processName = $processName;
		$this->_touchedFields[static::FIELD_PROCESS_NAME] = true;

		return $this;
	}
	/**
	 * @param string $processName
	 *
	 * @return $this
	 */
	public function setProcessNameOrFail(string $processName)
	{
		$this->processName = $processName;
		$this->_touchedFields[static::FIELD_PROCESS_NAME] = true;

		return $this;
	}
	/**
	 * @return string|null
	 */
	public function getProcessName(): ?string
	{
		return $this->processName;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return string
	 */
	public function getProcessNameOrFail(): string
	{
		if ($this->processName === null) {
			throw new \RuntimeException('Value not set for field `processName` (expected to be not null)');
		}

		return $this->processName;
	}
	/**
	 * @return bool
	 */
	public function hasProcessName()
	{
		return $this->processName !== null;
	}
	/**
	 * @param string|null $stateMachineName
	 *
	 * @return $this
	 */
	public function setStateMachineName(?string $stateMachineName = null)
	{
		$this->stateMachineName = $stateMachineName;
		$this->_touchedFields[static::FIELD_STATE_MACHINE_NAME] = true;

		return $this;
	}
	/**
	 * @param string $stateMachineName
	 *
	 * @return $this
	 */
	public function setStateMachineNameOrFail(string $stateMachineName)
	{
		$this->stateMachineName = $stateMachineName;
		$this->_touchedFields[static::FIELD_STATE_MACHINE_NAME] = true;

		return $this;
	}
	/**
	 * @return string|null
	 */
	public function getStateMachineName(): ?string
	{
		return $this->stateMachineName;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return string
	 */
	public function getStateMachineNameOrFail(): string
	{
		if ($this->stateMachineName === null) {
			throw new \RuntimeException('Value not set for field `stateMachineName` (expected to be not null)');
		}

		return $this->stateMachineName;
	}
	/**
	 * @return bool
	 */
	public function hasStateMachineName()
	{
		return $this->stateMachineName !== null;
	}

	/**
	 * @param string|null $type
	 * @param array<string>|null $fields
	 * @param bool $touched
	 *
	 * @return array{processName: string|null, stateMachineName: string|null}
	 */
	public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
	{
		return $this->_toArrayInternal($type, $fields, $touched);
	}

	/**
	 * @param array{processName: string|null, stateMachineName: string|null} $data
	 * @param bool $ignoreMissing
	 * @param string|null $type
	 *
	 * @return static
	 */
	public static function createFromArray(array $data, bool $ignoreMissing = false, ?string $type = null): static
	{
		return static::_createFromArrayInternal($data, $ignoreMissing, $type);
	}
}
