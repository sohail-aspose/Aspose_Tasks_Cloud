<?php
namespace Aspose\Tasks\Models;
/**
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class Task {
	static $swaggerTypes = array(
		'Uid' => 'int',
		'Id' => 'int',
		'Name' => 'string',
		'Duration' => 'string',
		'DurationString' => 'string',
		'Start' => 'DateTime',
		'Finish' => 'DateTime',
		'PercentComplete' => 'int',
		'PercentWorkComplete' => 'int',
		'IsActive' => 'bool',
		'ActualCost' => 'float',
		'ActualDuration' => 'string',
		'ActualDurationString' => 'string',
		'ActualFinish' => 'DateTime',
		'ActualOvertimeCost' => 'float',
		'ActualOvertimeWork' => 'string',
		'ActualOvertimeWorkString' => 'string',
		'ActualStart' => 'DateTime',
		'BudgetWork' => 'string',
		'BudgetWorkString' => 'string',
		'BudgetCost' => 'float',
		'ConstraintDate' => 'DateTime',
		'ConstraintType' => 'ConstraintType',
		'Contact' => 'string',
		'Cost' => 'float',
		'Cv' => 'float',
		'Deadline' => 'DateTime',
		'DurationVariance' => 'string',
		'DurationVarianceString' => 'string',
		'EarlyFinish' => 'DateTime',
		'EarlyStart' => 'DateTime',
		'IsEffortDriven' => 'bool',
		'IsExternalTask' => 'bool',
		'FinishSlack' => 'int',
		'FinishVariance' => 'int',
		'FixedCost' => 'float',
		'FixedCostAccrual' => 'CostAccrualType',
		'FreeSlack' => 'int',
		'GUID' => 'string',
		'HideBar' => 'bool',
		'IgnoreResourceCalendar' => 'bool',
		'LateFinish' => 'DateTime',
		'LateStart' => 'DateTime',
		'IsLevelAssignments' => 'bool',
		'CanLevelingSplit' => 'bool',
		'LevelingDelay' => 'int',
		'IsMarked' => 'bool',
		'IsMilestone' => 'bool',
		'IsCritical' => 'bool',
		'IsSubproject' => 'bool',
		'IsSubprojectReadOnly' => 'bool',
		'SubprojectName' => 'string',
		'IsSummary' => 'bool',
		'SubtasksUids' => 'array[int]',
		'OutlineLevel' => 'int',
		'IsOverAllocated' => 'bool',
		'IsEstimated' => 'bool',
		'OvertimeCost' => 'float',
		'OvertimeWork' => 'string',
		'OvertimeWorkString' => 'string',
		'PhysicalPercentComplete' => 'int',
		'PreLeveledFinish' => 'DateTime',
		'PreLeveledStart' => 'DateTime',
		'IsRecurring' => 'bool',
		'RegularWork' => 'string',
		'RegularWorkString' => 'string',
		'RemainingCost' => 'float',
		'RemainingDuration' => 'string',
		'RemainingDurationString' => 'string',
		'RemainingOvertimeCost' => 'float',
		'RemainingOvertimeWork' => 'string',
		'RemainingOvertimeWorkString' => 'string',
		'RemainingWork' => 'string',
		'RemainingWorkString' => 'string',
		'Resume' => 'DateTime',
		'IsRollup' => 'bool',
		'StartSlack' => 'int',
		'StartVariance' => 'int',
		'CalendarUid' => 'int',
		'IsManual' => 'bool',
		'TotalSlack' => 'int',
		'Type' => 'TaskType',
		'Wbs' => 'string',
		'Priority' => 'int',
		'Work' => 'string',
		'WorkString' => 'string',
		'WorkVariance' => 'float',
		'NotesText' => 'string',
		'Acwp' => 'float',
		'Bcws' => 'float',
		'Bcwp' => 'float',
		'LevelingDelayFromat' => 'TimeUnitType',
		'Predecessors' => 'string',
		'Successors' => 'string',
		'BaselineStart' => 'DateTime',
		'BaselineFinish' => 'DateTime',
		'BaselineDuration' => 'string',
		'BaselineDurationString' => 'string',
		'BaselineFixedCost' => 'float',
		'BaselineDurationFormat' => 'TimeUnitType',
		'BaselineEstimatedDuration' => 'bool',
		'BaselineWork' => 'string',
		'BaselineWorkString' => 'string',
		'BaselineCost' => 'float',
		'BaselineBcws' => 'float',
		'BaselineBcwp' => 'float',
		'Baseline1Start' => 'DateTime',
		'Baseline1Finish' => 'DateTime',
		'Baseline1Duration' => 'string',
		'Baseline1DurationString' => 'string',
		'Baseline1FixedCost' => 'float',
		'Baseline1DurationFormat' => 'TimeUnitType',
		'Baseline1EstimatedDuration' => 'bool',
		'Baseline1Work' => 'string',
		'Baseline1WorkString' => 'string',
		'Baseline1Cost' => 'float',
		'Baseline1Bcws' => 'float',
		'Baseline1Bcwp' => 'float',
		'Baseline2Start' => 'DateTime',
		'Baseline2Finish' => 'DateTime',
		'Baseline2Duration' => 'string',
		'Baseline2DurationString' => 'string',
		'Baseline2FixedCost' => 'float',
		'Baseline2DurationFormat' => 'TimeUnitType',
		'Baseline2EstimatedDuration' => 'bool',
		'Baseline2Work' => 'string',
		'Baseline2WorkString' => 'string',
		'Baseline2Cost' => 'float',
		'Baseline2Bcws' => 'float',
		'Baseline2Bcwp' => 'float',
		'Baseline3Start' => 'DateTime',
		'Baseline3Finish' => 'DateTime',
		'Baseline3Duration' => 'string',
		'Baseline3DurationString' => 'string',
		'Baseline3FixedCost' => 'float',
		'Baseline3DurationFormat' => 'TimeUnitType',
		'Baseline3EstimatedDuration' => 'bool',
		'Baseline3Work' => 'string',
		'Baseline3WorkString' => 'string',
		'Baseline3Cost' => 'float',
		'Baseline3Bcws' => 'float',
		'Baseline3Bcwp' => 'float',
		'Baseline4Start' => 'DateTime',
		'Baseline4Finish' => 'DateTime',
		'Baseline4Duration' => 'string',
		'Baseline4DurationString' => 'string',
		'Baseline4FixedCost' => 'float',
		'Baseline4DurationFormat' => 'TimeUnitType',
		'Baseline4EstimatedDuration' => 'bool',
		'Baseline4Work' => 'string',
		'Baseline4WorkString' => 'string',
		'Baseline4Cost' => 'float',
		'Baseline4Bcws' => 'float',
		'Baseline4Bcwp' => 'float',
		'Baseline5Start' => 'DateTime',
		'Baseline5Finish' => 'DateTime',
		'Baseline5Duration' => 'string',
		'Baseline5DurationString' => 'string',
		'Baseline5FixedCost' => 'float',
		'Baseline5DurationFormat' => 'TimeUnitType',
		'Baseline5EstimatedDuration' => 'bool',
		'Baseline5Work' => 'string',
		'Baseline5WorkString' => 'string',
		'Baseline5Cost' => 'float',
		'Baseline5Bcws' => 'float',
		'Baseline5Bcwp' => 'float',
		'Baseline6Start' => 'DateTime',
		'Baseline6Finish' => 'DateTime',
		'Baseline6Duration' => 'string',
		'Baseline6DurationString' => 'string',
		'Baseline6FixedCost' => 'float',
		'Baseline6DurationFormat' => 'TimeUnitType',
		'Baseline6EstimatedDuration' => 'bool',
		'Baseline6Work' => 'string',
		'Baseline6WorkString' => 'string',
		'Baseline6Cost' => 'float',
		'Baseline6Bcws' => 'float',
		'Baseline6Bcwp' => 'float',
		'Baseline7Start' => 'DateTime',
		'Baseline7Finish' => 'DateTime',
		'Baseline7Duration' => 'string',
		'Baseline7DurationString' => 'string',
		'Baseline7FixedCost' => 'float',
		'Baseline7DurationFormat' => 'TimeUnitType',
		'Baseline7EstimatedDuration' => 'bool',
		'Baseline7Work' => 'string',
		'Baseline7WorkString' => 'string',
		'Baseline7Cost' => 'float',
		'Baseline7Bcws' => 'float',
		'Baseline7Bcwp' => 'float',
		'Baseline8Start' => 'DateTime',
		'Baseline8Finish' => 'DateTime',
		'Baseline8Duration' => 'string',
		'Baseline8DurationString' => 'string',
		'Baseline8FixedCost' => 'float',
		'Baseline8DurationFormat' => 'TimeUnitType',
		'Baseline8EstimatedDuration' => 'bool',
		'Baseline8Work' => 'string',
		'Baseline8WorkString' => 'string',
		'Baseline8Cost' => 'float',
		'Baseline8Bcws' => 'float',
		'Baseline8Bcwp' => 'float',
		'Baseline9Start' => 'DateTime',
		'Baseline9Finish' => 'DateTime',
		'Baseline9Duration' => 'string',
		'Baseline9DurationString' => 'string',
		'Baseline9FixedCost' => 'float',
		'Baseline9DurationFormat' => 'TimeUnitType',
		'Baseline9EstimatedDuration' => 'bool',
		'Baseline9Work' => 'string',
		'Baseline9WorkString' => 'string',
		'Baseline9Cost' => 'float',
		'Baseline9Bcws' => 'float',
		'Baseline9Bcwp' => 'float',
		'Baseline10Start' => 'DateTime',
		'Baseline10Finish' => 'DateTime',
		'Baseline10Duration' => 'string',
		'Baseline10DurationString' => 'string',
		'Baseline10FixedCost' => 'float',
		'Baseline10DurationFormat' => 'TimeUnitType',
		'BaselineEstimated10Duration' => 'bool',
		'Baseline10Work' => 'string',
		'Baseline10WorkString' => 'string',
		'Baseline10Cost' => 'float',
		'Baseline10Bcws' => 'float',
		'Baseline10Bcwp' => 'float',
		'ExtendedAttributes' => 'array[ExtendedAttribute]',
		'OutlineCodes' => 'array[OutlineCode]'

	);

	public $Uid; // int
	public $Id; // int
	public $Name; // string
	public $Duration; // string
	public $DurationString; // string
	public $Start; // DateTime
	public $Finish; // DateTime
	public $PercentComplete; // int
	public $PercentWorkComplete; // int
	public $IsActive; // bool
	public $ActualCost; // float
	public $ActualDuration; // string
	public $ActualDurationString; // string
	public $ActualFinish; // DateTime
	public $ActualOvertimeCost; // float
	public $ActualOvertimeWork; // string
	public $ActualOvertimeWorkString; // string
	public $ActualStart; // DateTime
	public $BudgetWork; // string
	public $BudgetWorkString; // string
	public $BudgetCost; // float
	public $ConstraintDate; // DateTime
	public $ConstraintType; // ConstraintType
	public $Contact; // string
	public $Cost; // float
	public $Cv; // float
	public $Deadline; // DateTime
	public $DurationVariance; // string
	public $DurationVarianceString; // string
	public $EarlyFinish; // DateTime
	public $EarlyStart; // DateTime
	public $IsEffortDriven; // bool
	public $IsExternalTask; // bool
	public $FinishSlack; // int
	public $FinishVariance; // int
	public $FixedCost; // float
	public $FixedCostAccrual; // CostAccrualType
	public $FreeSlack; // int
	public $GUID; // string
	public $HideBar; // bool
	public $IgnoreResourceCalendar; // bool
	public $LateFinish; // DateTime
	public $LateStart; // DateTime
	public $IsLevelAssignments; // bool
	public $CanLevelingSplit; // bool
	public $LevelingDelay; // int
	public $IsMarked; // bool
	public $IsMilestone; // bool
	public $IsCritical; // bool
	public $IsSubproject; // bool
	public $IsSubprojectReadOnly; // bool
	public $SubprojectName; // string
	public $IsSummary; // bool
	public $SubtasksUids; // array[int]
	public $OutlineLevel; // int
	public $IsOverAllocated; // bool
	public $IsEstimated; // bool
	public $OvertimeCost; // float
	public $OvertimeWork; // string
	public $OvertimeWorkString; // string
	public $PhysicalPercentComplete; // int
	public $PreLeveledFinish; // DateTime
	public $PreLeveledStart; // DateTime
	public $IsRecurring; // bool
	public $RegularWork; // string
	public $RegularWorkString; // string
	public $RemainingCost; // float
	public $RemainingDuration; // string
	public $RemainingDurationString; // string
	public $RemainingOvertimeCost; // float
	public $RemainingOvertimeWork; // string
	public $RemainingOvertimeWorkString; // string
	public $RemainingWork; // string
	public $RemainingWorkString; // string
	public $Resume; // DateTime
	public $IsRollup; // bool
	public $StartSlack; // int
	public $StartVariance; // int
	public $CalendarUid; // int
	public $IsManual; // bool
	public $TotalSlack; // int
	public $Type; // TaskType
	public $Wbs; // string
	public $Priority; // int
	public $Work; // string
	public $WorkString; // string
	public $WorkVariance; // float
	public $NotesText; // string
	public $Acwp; // float
	public $Bcws; // float
	public $Bcwp; // float
	public $LevelingDelayFromat; // TimeUnitType
	public $Predecessors; // string
	public $Successors; // string
	public $BaselineStart; // DateTime
	public $BaselineFinish; // DateTime
	public $BaselineDuration; // string
	public $BaselineDurationString; // string
	public $BaselineFixedCost; // float
	public $BaselineDurationFormat; // TimeUnitType
	public $BaselineEstimatedDuration; // bool
	public $BaselineWork; // string
	public $BaselineWorkString; // string
	public $BaselineCost; // float
	public $BaselineBcws; // float
	public $BaselineBcwp; // float
	public $Baseline1Start; // DateTime
	public $Baseline1Finish; // DateTime
	public $Baseline1Duration; // string
	public $Baseline1DurationString; // string
	public $Baseline1FixedCost; // float
	public $Baseline1DurationFormat; // TimeUnitType
	public $Baseline1EstimatedDuration; // bool
	public $Baseline1Work; // string
	public $Baseline1WorkString; // string
	public $Baseline1Cost; // float
	public $Baseline1Bcws; // float
	public $Baseline1Bcwp; // float
	public $Baseline2Start; // DateTime
	public $Baseline2Finish; // DateTime
	public $Baseline2Duration; // string
	public $Baseline2DurationString; // string
	public $Baseline2FixedCost; // float
	public $Baseline2DurationFormat; // TimeUnitType
	public $Baseline2EstimatedDuration; // bool
	public $Baseline2Work; // string
	public $Baseline2WorkString; // string
	public $Baseline2Cost; // float
	public $Baseline2Bcws; // float
	public $Baseline2Bcwp; // float
	public $Baseline3Start; // DateTime
	public $Baseline3Finish; // DateTime
	public $Baseline3Duration; // string
	public $Baseline3DurationString; // string
	public $Baseline3FixedCost; // float
	public $Baseline3DurationFormat; // TimeUnitType
	public $Baseline3EstimatedDuration; // bool
	public $Baseline3Work; // string
	public $Baseline3WorkString; // string
	public $Baseline3Cost; // float
	public $Baseline3Bcws; // float
	public $Baseline3Bcwp; // float
	public $Baseline4Start; // DateTime
	public $Baseline4Finish; // DateTime
	public $Baseline4Duration; // string
	public $Baseline4DurationString; // string
	public $Baseline4FixedCost; // float
	public $Baseline4DurationFormat; // TimeUnitType
	public $Baseline4EstimatedDuration; // bool
	public $Baseline4Work; // string
	public $Baseline4WorkString; // string
	public $Baseline4Cost; // float
	public $Baseline4Bcws; // float
	public $Baseline4Bcwp; // float
	public $Baseline5Start; // DateTime
	public $Baseline5Finish; // DateTime
	public $Baseline5Duration; // string
	public $Baseline5DurationString; // string
	public $Baseline5FixedCost; // float
	public $Baseline5DurationFormat; // TimeUnitType
	public $Baseline5EstimatedDuration; // bool
	public $Baseline5Work; // string
	public $Baseline5WorkString; // string
	public $Baseline5Cost; // float
	public $Baseline5Bcws; // float
	public $Baseline5Bcwp; // float
	public $Baseline6Start; // DateTime
	public $Baseline6Finish; // DateTime
	public $Baseline6Duration; // string
	public $Baseline6DurationString; // string
	public $Baseline6FixedCost; // float
	public $Baseline6DurationFormat; // TimeUnitType
	public $Baseline6EstimatedDuration; // bool
	public $Baseline6Work; // string
	public $Baseline6WorkString; // string
	public $Baseline6Cost; // float
	public $Baseline6Bcws; // float
	public $Baseline6Bcwp; // float
	public $Baseline7Start; // DateTime
	public $Baseline7Finish; // DateTime
	public $Baseline7Duration; // string
	public $Baseline7DurationString; // string
	public $Baseline7FixedCost; // float
	public $Baseline7DurationFormat; // TimeUnitType
	public $Baseline7EstimatedDuration; // bool
	public $Baseline7Work; // string
	public $Baseline7WorkString; // string
	public $Baseline7Cost; // float
	public $Baseline7Bcws; // float
	public $Baseline7Bcwp; // float
	public $Baseline8Start; // DateTime
	public $Baseline8Finish; // DateTime
	public $Baseline8Duration; // string
	public $Baseline8DurationString; // string
	public $Baseline8FixedCost; // float
	public $Baseline8DurationFormat; // TimeUnitType
	public $Baseline8EstimatedDuration; // bool
	public $Baseline8Work; // string
	public $Baseline8WorkString; // string
	public $Baseline8Cost; // float
	public $Baseline8Bcws; // float
	public $Baseline8Bcwp; // float
	public $Baseline9Start; // DateTime
	public $Baseline9Finish; // DateTime
	public $Baseline9Duration; // string
	public $Baseline9DurationString; // string
	public $Baseline9FixedCost; // float
	public $Baseline9DurationFormat; // TimeUnitType
	public $Baseline9EstimatedDuration; // bool
	public $Baseline9Work; // string
	public $Baseline9WorkString; // string
	public $Baseline9Cost; // float
	public $Baseline9Bcws; // float
	public $Baseline9Bcwp; // float
	public $Baseline10Start; // DateTime
	public $Baseline10Finish; // DateTime
	public $Baseline10Duration; // string
	public $Baseline10DurationString; // string
	public $Baseline10FixedCost; // float
	public $Baseline10DurationFormat; // TimeUnitType
	public $BaselineEstimated10Duration; // bool
	public $Baseline10Work; // string
	public $Baseline10WorkString; // string
	public $Baseline10Cost; // float
	public $Baseline10Bcws; // float
	public $Baseline10Bcwp; // float
	public $ExtendedAttributes; // array[ExtendedAttribute]
	public $OutlineCodes; // array[OutlineCode]
	}
