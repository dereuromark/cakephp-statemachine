<?php
/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace StateMachine\Dto\StateMachine;

use PhpCollective\Dto\Dto\AbstractDto;

/**
 * StateMachine/Item DTO
 *
 * @property int|null $identifier
 * @property int|null $idStateMachineProcess
 * @property int|null $idItemState
 * @property string|null $processName
 * @property string|null $stateMachineName
 * @property string|null $stateName
 * @property string|null $eventName
 * @property string|null $createdAt
 */
class ItemDto extends AbstractDto
{
	/**
	 * @var string
	 */
	const FIELD_IDENTIFIER = 'identifier';
	/**
	 * @var string
	 */
	const FIELD_ID_STATE_MACHINE_PROCESS = 'idStateMachineProcess';
	/**
	 * @var string
	 */
	const FIELD_ID_ITEM_STATE = 'idItemState';
	/**
	 * @var string
	 */
	const FIELD_PROCESS_NAME = 'processName';
	/**
	 * @var string
	 */
	const FIELD_STATE_MACHINE_NAME = 'stateMachineName';
	/**
	 * @var string
	 */
	const FIELD_STATE_NAME = 'stateName';
	/**
	 * @var string
	 */
	const FIELD_EVENT_NAME = 'eventName';
	/**
	 * @var string
	 */
	const FIELD_CREATED_AT = 'createdAt';
	/**
	 * @var int|null
	 */
	protected ?int $identifier = null;
	/**
	 * @var int|null
	 */
	protected ?int $idStateMachineProcess = null;
	/**
	 * @var int|null
	 */
	protected ?int $idItemState = null;
	/**
	 * @var string|null
	 */
	protected ?string $processName = null;
	/**
	 * @var string|null
	 */
	protected ?string $stateMachineName = null;
	/**
	 * @var string|null
	 */
	protected ?string $stateName = null;
	/**
	 * @var string|null
	 */
	protected ?string $eventName = null;
	/**
	 * @var string|null
	 */
	protected ?string $createdAt = null;
	/**
	 * Some data is only for debugging for now.
	 *
	 * @var array<string, array<string, mixed>>
	 */
	protected array $_metadata = [
		'identifier' => [
			'type' => 'int',
			'name' => 'identifier',
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
		'idStateMachineProcess' => [
			'type' => 'int',
			'name' => 'idStateMachineProcess',
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
		'idItemState' => [
			'type' => 'int',
			'name' => 'idItemState',
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
		'stateName' => [
			'type' => 'string',
			'name' => 'stateName',
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
		'eventName' => [
			'type' => 'string',
			'name' => 'eventName',
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
		'createdAt' => [
			'type' => 'string',
			'name' => 'createdAt',
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
			'identifier' => 'identifier',
			'id_state_machine_process' => 'idStateMachineProcess',
			'id_item_state' => 'idItemState',
			'process_name' => 'processName',
			'state_machine_name' => 'stateMachineName',
			'state_name' => 'stateName',
			'event_name' => 'eventName',
			'created_at' => 'createdAt',
		],
		'dashed' => [
			'identifier' => 'identifier',
			'id-state-machine-process' => 'idStateMachineProcess',
			'id-item-state' => 'idItemState',
			'process-name' => 'processName',
			'state-machine-name' => 'stateMachineName',
			'state-name' => 'stateName',
			'event-name' => 'eventName',
			'created-at' => 'createdAt',
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
		'identifier' => 'setIdentifier',
		'idStateMachineProcess' => 'setIdstatemachineprocess',
		'idItemState' => 'setIditemstate',
		'processName' => 'setProcessname',
		'stateMachineName' => 'setStatemachinename',
		'stateName' => 'setStatename',
		'eventName' => 'setEventname',
		'createdAt' => 'setCreatedat',
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
		if (isset($data['identifier'])) {
			$this->identifier = $data['identifier'];
			$this->_touchedFields['identifier'] = true;
		}
		if (isset($data['idStateMachineProcess'])) {
			$this->idStateMachineProcess = $data['idStateMachineProcess'];
			$this->_touchedFields['idStateMachineProcess'] = true;
		}
		if (isset($data['idItemState'])) {
			$this->idItemState = $data['idItemState'];
			$this->_touchedFields['idItemState'] = true;
		}
		if (isset($data['processName'])) {
			$this->processName = $data['processName'];
			$this->_touchedFields['processName'] = true;
		}
		if (isset($data['stateMachineName'])) {
			$this->stateMachineName = $data['stateMachineName'];
			$this->_touchedFields['stateMachineName'] = true;
		}
		if (isset($data['stateName'])) {
			$this->stateName = $data['stateName'];
			$this->_touchedFields['stateName'] = true;
		}
		if (isset($data['eventName'])) {
			$this->eventName = $data['eventName'];
			$this->_touchedFields['eventName'] = true;
		}
		if (isset($data['createdAt'])) {
			$this->createdAt = $data['createdAt'];
			$this->_touchedFields['createdAt'] = true;
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
	 * @param int|null $identifier
	 *
	 * @return $this
	 */
	public function setIdentifier(?int $identifier = null)
	{
		$this->identifier = $identifier;
		$this->_touchedFields[static::FIELD_IDENTIFIER] = true;

		return $this;
	}
	/**
	 * @param int $identifier
	 *
	 * @return $this
	 */
	public function setIdentifierOrFail(int $identifier)
	{
		$this->identifier = $identifier;
		$this->_touchedFields[static::FIELD_IDENTIFIER] = true;

		return $this;
	}
	/**
	 * @return int|null
	 */
	public function getIdentifier(): ?int
	{
		return $this->identifier;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return int
	 */
	public function getIdentifierOrFail(): int
	{
		if ($this->identifier === null) {
			throw new \RuntimeException('Value not set for field `identifier` (expected to be not null)');
		}

		return $this->identifier;
	}
	/**
	 * @return bool
	 */
	public function hasIdentifier()
	{
		return $this->identifier !== null;
	}
	/**
	 * @param int|null $idStateMachineProcess
	 *
	 * @return $this
	 */
	public function setIdStateMachineProcess(?int $idStateMachineProcess = null)
	{
		$this->idStateMachineProcess = $idStateMachineProcess;
		$this->_touchedFields[static::FIELD_ID_STATE_MACHINE_PROCESS] = true;

		return $this;
	}
	/**
	 * @param int $idStateMachineProcess
	 *
	 * @return $this
	 */
	public function setIdStateMachineProcessOrFail(int $idStateMachineProcess)
	{
		$this->idStateMachineProcess = $idStateMachineProcess;
		$this->_touchedFields[static::FIELD_ID_STATE_MACHINE_PROCESS] = true;

		return $this;
	}
	/**
	 * @return int|null
	 */
	public function getIdStateMachineProcess(): ?int
	{
		return $this->idStateMachineProcess;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return int
	 */
	public function getIdStateMachineProcessOrFail(): int
	{
		if ($this->idStateMachineProcess === null) {
			throw new \RuntimeException('Value not set for field `idStateMachineProcess` (expected to be not null)');
		}

		return $this->idStateMachineProcess;
	}
	/**
	 * @return bool
	 */
	public function hasIdStateMachineProcess()
	{
		return $this->idStateMachineProcess !== null;
	}
	/**
	 * @param int|null $idItemState
	 *
	 * @return $this
	 */
	public function setIdItemState(?int $idItemState = null)
	{
		$this->idItemState = $idItemState;
		$this->_touchedFields[static::FIELD_ID_ITEM_STATE] = true;

		return $this;
	}
	/**
	 * @param int $idItemState
	 *
	 * @return $this
	 */
	public function setIdItemStateOrFail(int $idItemState)
	{
		$this->idItemState = $idItemState;
		$this->_touchedFields[static::FIELD_ID_ITEM_STATE] = true;

		return $this;
	}
	/**
	 * @return int|null
	 */
	public function getIdItemState(): ?int
	{
		return $this->idItemState;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return int
	 */
	public function getIdItemStateOrFail(): int
	{
		if ($this->idItemState === null) {
			throw new \RuntimeException('Value not set for field `idItemState` (expected to be not null)');
		}

		return $this->idItemState;
	}
	/**
	 * @return bool
	 */
	public function hasIdItemState()
	{
		return $this->idItemState !== null;
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
	 * @param string|null $stateName
	 *
	 * @return $this
	 */
	public function setStateName(?string $stateName = null)
	{
		$this->stateName = $stateName;
		$this->_touchedFields[static::FIELD_STATE_NAME] = true;

		return $this;
	}
	/**
	 * @param string $stateName
	 *
	 * @return $this
	 */
	public function setStateNameOrFail(string $stateName)
	{
		$this->stateName = $stateName;
		$this->_touchedFields[static::FIELD_STATE_NAME] = true;

		return $this;
	}
	/**
	 * @return string|null
	 */
	public function getStateName(): ?string
	{
		return $this->stateName;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return string
	 */
	public function getStateNameOrFail(): string
	{
		if ($this->stateName === null) {
			throw new \RuntimeException('Value not set for field `stateName` (expected to be not null)');
		}

		return $this->stateName;
	}
	/**
	 * @return bool
	 */
	public function hasStateName()
	{
		return $this->stateName !== null;
	}
	/**
	 * @param string|null $eventName
	 *
	 * @return $this
	 */
	public function setEventName(?string $eventName = null)
	{
		$this->eventName = $eventName;
		$this->_touchedFields[static::FIELD_EVENT_NAME] = true;

		return $this;
	}
	/**
	 * @param string $eventName
	 *
	 * @return $this
	 */
	public function setEventNameOrFail(string $eventName)
	{
		$this->eventName = $eventName;
		$this->_touchedFields[static::FIELD_EVENT_NAME] = true;

		return $this;
	}
	/**
	 * @return string|null
	 */
	public function getEventName(): ?string
	{
		return $this->eventName;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return string
	 */
	public function getEventNameOrFail(): string
	{
		if ($this->eventName === null) {
			throw new \RuntimeException('Value not set for field `eventName` (expected to be not null)');
		}

		return $this->eventName;
	}
	/**
	 * @return bool
	 */
	public function hasEventName()
	{
		return $this->eventName !== null;
	}
	/**
	 * @param string|null $createdAt
	 *
	 * @return $this
	 */
	public function setCreatedAt(?string $createdAt = null)
	{
		$this->createdAt = $createdAt;
		$this->_touchedFields[static::FIELD_CREATED_AT] = true;

		return $this;
	}
	/**
	 * @param string $createdAt
	 *
	 * @return $this
	 */
	public function setCreatedAtOrFail(string $createdAt)
	{
		$this->createdAt = $createdAt;
		$this->_touchedFields[static::FIELD_CREATED_AT] = true;

		return $this;
	}
	/**
	 * @return string|null
	 */
	public function getCreatedAt(): ?string
	{
		return $this->createdAt;
	}
	/**
	 * @throws \RuntimeException If value is not set.
	 *
	 * @return string
	 */
	public function getCreatedAtOrFail(): string
	{
		if ($this->createdAt === null) {
			throw new \RuntimeException('Value not set for field `createdAt` (expected to be not null)');
		}

		return $this->createdAt;
	}
	/**
	 * @return bool
	 */
	public function hasCreatedAt()
	{
		return $this->createdAt !== null;
	}

	/**
	 * @param string|null $type
	 * @param array<string>|null $fields
	 * @param bool $touched
	 *
	 * @return array{identifier: int|null, idStateMachineProcess: int|null, idItemState: int|null, processName: string|null, stateMachineName: string|null, stateName: string|null, eventName: string|null, createdAt: string|null}
	 */
	public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
	{
		/** @var array{identifier: int|null, idStateMachineProcess: int|null, idItemState: int|null, processName: string|null, stateMachineName: string|null, stateName: string|null, eventName: string|null, createdAt: string|null} $result */
		$result = $this->_toArrayInternal($type, $fields, $touched);

		return $result;
	}

	/**
	 * @param array{identifier: int|null, idStateMachineProcess: int|null, idItemState: int|null, processName: string|null, stateMachineName: string|null, stateName: string|null, eventName: string|null, createdAt: string|null} $data
	 * @phpstan-param array<string, mixed> $data
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
