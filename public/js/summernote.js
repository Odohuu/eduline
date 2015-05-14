var PMA_messages = new Array();
PMA_messages['strNoDropDatabases'] = "\"DROP DATABASE\" statements are disabled.";
PMA_messages['strConfirm'] = "Confirm";
PMA_messages['strDoYouReally'] = "Do you really want to execute \"%s\"?";
PMA_messages['strDropDatabaseStrongWarning'] = "You are about to DESTROY a complete database!";
PMA_messages['strDropTableStrongWarning'] = "You are about to DESTROY a complete table!";
PMA_messages['strTruncateTableStrongWarning'] = "You are about to TRUNCATE a complete table!";
PMA_messages['strDeleteTrackingData'] = "Delete tracking data for this table";
PMA_messages['strDeletingTrackingData'] = "Deleting tracking data";
PMA_messages['strDroppingPrimaryKeyIndex'] = "Dropping Primary Key/Index";
PMA_messages['strOperationTakesLongTime'] = "This operation could take a long time. Proceed anyway?";
PMA_messages['strDropUserGroupWarning'] = "Do you really want to delete user group \"%s\"?";
PMA_messages['strFormEmpty'] = "Missing value in the form!";
PMA_messages['strEnterValidNumber'] = "Please enter a valid number";
PMA_messages['strEnterValidLength'] = "Please enter a valid length";
PMA_messages['strAddIndex'] = "Add Index";
PMA_messages['strEditIndex'] = "Edit Index";
PMA_messages['strAddToIndex'] = "Add %s column(s) to index";
PMA_messages['strYValues'] = "Y Values";
PMA_messages['strHostEmpty'] = "The host name is empty!";
PMA_messages['strUserEmpty'] = "The user name is empty!";
PMA_messages['strPasswordEmpty'] = "The password is empty!";
PMA_messages['strPasswordNotSame'] = "The passwords aren\'t the same!";
PMA_messages['strAddUser'] = "Add user";
PMA_messages['strReloadingPrivileges'] = "Reloading Privileges";
PMA_messages['strRemovingSelectedUsers'] = "Removing Selected Users";
PMA_messages['strClose'] = "Close";
PMA_messages['strOther'] = "Other";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "Connections / Processes";
PMA_messages['strIncompatibleMonitorConfig'] = "Local monitor configuration incompatible";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "The chart arrangement configuration in your browsers local storage is not compatible anymore to the newer version of the monitor dialog. It is very likely that your current configuration will not work anymore. Please reset your configuration to default in the <i>Settings</i> menu.";
PMA_messages['strQueryCacheEfficiency'] = "Query cache efficiency";
PMA_messages['strQueryCacheUsage'] = "Query cache usage";
PMA_messages['strQueryCacheUsed'] = "Query cache used";
PMA_messages['strSystemCPUUsage'] = "System CPU Usage";
PMA_messages['strSystemMemory'] = "System memory";
PMA_messages['strSystemSwap'] = "System swap";
PMA_messages['strAverageLoad'] = "Average load";
PMA_messages['strTotalMemory'] = "Total memory";
PMA_messages['strCachedMemory'] = "Cached memory";
PMA_messages['strBufferedMemory'] = "Buffered memory";
PMA_messages['strFreeMemory'] = "Free memory";
PMA_messages['strUsedMemory'] = "Used memory";
PMA_messages['strTotalSwap'] = "Total Swap";
PMA_messages['strCachedSwap'] = "Cached Swap";
PMA_messages['strUsedSwap'] = "Used Swap";
PMA_messages['strFreeSwap'] = "Free Swap";
PMA_messages['strBytesSent'] = "Bytes sent";
PMA_messages['strBytesReceived'] = "Bytes received";
PMA_messages['strConnections'] = "Connections";
PMA_messages['strProcesses'] = "Processes";
PMA_messages['strB'] = "B";
PMA_messages['strKiB'] = "KiB";
PMA_messages['strMiB'] = "MiB";
PMA_messages['strGiB'] = "GiB";
PMA_messages['strTiB'] = "TiB";
PMA_messages['strPiB'] = "PiB";
PMA_messages['strEiB'] = "EiB";
PMA_messages['strTables'] = "%d table(s)";
PMA_messages['strQuestions'] = "Questions";
PMA_messages['strTraffic'] = "Traffic";
PMA_messages['strSettings'] = "Settings";
PMA_messages['strRemoveChart'] = "Remove chart";
PMA_messages['strEditChart'] = "Edit title and labels";
PMA_messages['strAddChart'] = "Add chart to grid";
PMA_messages['strAddOneSeriesWarning'] = "Please add at least one variable to the series";
PMA_messages['strNone'] = "None";
PMA_messages['strResumeMonitor'] = "Resume monitor";
PMA_messages['strPauseMonitor'] = "Pause monitor";
PMA_messages['strBothLogOn'] = "general_log and slow_query_log are enabled.";
PMA_messages['strGenLogOn'] = "general_log is enabled.";
PMA_messages['strSlowLogOn'] = "slow_query_log is enabled.";
PMA_messages['strBothLogOff'] = "slow_query_log and general_log are disabled.";
PMA_messages['strLogOutNotTable'] = "log_output is not set to TABLE.";
PMA_messages['strLogOutIsTable'] = "log_output is set to TABLE.";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "slow_query_log is enabled, but the server logs only queries that take longer than %d seconds. It is advisable to set this long_query_time 0-2 seconds, depending on your system.";
PMA_messages['strLongQueryTimeSet'] = "long_query_time is set to %d second(s).";
PMA_messages['strSettingsAppliedGlobal'] = "Following settings will be applied globally and reset to default on server restart:";
PMA_messages['strSetLogOutput'] = "Set log_output to %s";
PMA_messages['strEnableVar'] = "Enable %s";
PMA_messages['strDisableVar'] = "Disable %s";
PMA_messages['setSetLongQueryTime'] = "Set long_query_time to %ds";
PMA_messages['strNoSuperUser'] = "You can\'t change these variables. Please log in as root or contact your database administrator.";
PMA_messages['strChangeSettings'] = "Change settings";
PMA_messages['strCurrentSettings'] = "Current settings";
PMA_messages['strChartTitle'] = "Chart Title";
PMA_messages['strDifferential'] = "Differential";
PMA_messages['strDividedBy'] = "Divided by %s";
PMA_messages['strUnit'] = "Unit";
PMA_messages['strFromSlowLog'] = "From slow log";
PMA_messages['strFromGeneralLog'] = "From general log";
PMA_messages['strServerLogError'] = "The database name is not known for this query in the server\'s logs.";
PMA_messages['strAnalysingLogsTitle'] = "Analysing logs";
PMA_messages['strAnalysingLogs'] = "Analysing & loading logs. This may take a while.";
PMA_messages['strCancelRequest'] = "Cancel request";
PMA_messages['strCountColumnExplanation'] = "This column shows the amount of identical queries that are grouped together. However only the SQL query itself has been used as a grouping criteria, so the other attributes of queries, such as start time, may differ.";
PMA_messages['strMoreCountColumnExplanation'] = "Since grouping of INSERTs queries has been selected, INSERT queries into the same table are also being grouped together, disregarding of the inserted data.";
PMA_messages['strLogDataLoaded'] = "Log data loaded. Queries executed in this time span:";
PMA_messages['strJumpToTable'] = "Jump to Log table";
PMA_messages['strNoDataFoundTitle'] = "No data found";
PMA_messages['strNoDataFound'] = "Log analysed, but no data found in this time span.";
PMA_messages['strAnalyzing'] = "Analyzing‚Ä¶";
PMA_messages['strExplainOutput'] = "Explain output";
PMA_messages['strStatus'] = "Status";
PMA_messages['strTime'] = "Time";
PMA_messages['strTotalTime'] = "Total time:";
PMA_messages['strProfilingResults'] = "Profiling results";
PMA_messages['strTable'] = "Table";
PMA_messages['strChart'] = "Chart";
PMA_messages['strChartEdit'] = "Edit chart";
PMA_messages['strSeries'] = "Series";
PMA_messages['strFiltersForLogTable'] = "Log table filter options";
PMA_messages['strFilter'] = "Filter";
PMA_messages['strFilterByWordRegexp'] = "Filter queries by word/regexp:";
PMA_messages['strIgnoreWhereAndGroup'] = "Group queries, ignoring variable data in WHERE clauses";
PMA_messages['strSumRows'] = "Sum of grouped rows:";
PMA_messages['strTotal'] = "Total:";
PMA_messages['strLoadingLogs'] = "Loading logs";
PMA_messages['strRefreshFailed'] = "Monitor refresh failed";
PMA_messages['strInvalidResponseExplanation'] = "While requesting new chart data the server returned an invalid response. This is most likely because your session expired. Reloading the page and reentering your credentials should help.";
PMA_messages['strReloadPage'] = "Reload page";
PMA_messages['strAffectedRows'] = "Affected rows:";
PMA_messages['strFailedParsingConfig'] = "Failed parsing config file. It doesn\'t seem to be valid JSON code.";
PMA_messages['strFailedBuildingGrid'] = "Failed building chart grid with imported config. Resetting to default config‚Ä¶";
PMA_messages['strImport'] = "Import";
PMA_messages['strImportDialogTitle'] = "Import monitor configuration";
PMA_messages['strImportDialogMessage'] = "Please select the file you want to import";
PMA_messages['strAnalyzeQuery'] = "Analyse Query";
PMA_messages['strAdvisorSystem'] = "Advisor system";
PMA_messages['strPerformanceIssues'] = "Possible performance issues";
PMA_messages['strIssuse'] = "Issue";
PMA_messages['strRecommendation'] = "Recommendation";
PMA_messages['strRuleDetails'] = "Rule details";
PMA_messages['strJustification'] = "Justification";
PMA_messages['strFormula'] = "Used variable / formula";
PMA_messages['strTest'] = "Test";
PMA_messages['strGo'] = "Go";
PMA_messages['strCancel'] = "Cancel";
PMA_messages['strLoading'] = "Loading‚Ä¶";
PMA_messages['strAbortedRequest'] = "Request Aborted!!";
PMA_messages['strProcessingRequest'] = "Processing Request";
PMA_messages['strErrorProcessingRequest'] = "Error in Processing Request";
PMA_messages['strErrorCode'] = "Error code: %s";
PMA_messages['strErrorText'] = "Error text: %s";
PMA_messages['strNoDatabasesSelected'] = "No databases selected.";
PMA_messages['strDroppingColumn'] = "Dropping Column";
PMA_messages['strAddingPrimaryKey'] = "Adding Primary Key";
PMA_messages['strOK'] = "OK";
PMA_messages['strDismiss'] = "Click to dismiss this notification";
PMA_messages['strRenamingDatabases'] = "Renaming Databases";
PMA_messages['strReloadDatabase'] = "Reload Database";
PMA_messages['strCopyingDatabase'] = "Copying Database";
PMA_messages['strChangingCharset'] = "Changing Charset";
PMA_messages['strTableMustHaveAtleastOneColumn'] = "Table must have at least one column";
PMA_messages['strYes'] = "Yes";
PMA_messages['strNo'] = "No";
PMA_messages['strInsertTable'] = "Insert Table";
PMA_messages['strHideIndexes'] = "Hide indexes";
PMA_messages['strShowIndexes'] = "Show indexes";
PMA_messages['strForeignKeyCheck'] = "Foreign key check:";
PMA_messages['strForeignKeyCheckEnabled'] = "(Enabled)";
PMA_messages['strForeignKeyCheckDisabled'] = "(Disabled)";
PMA_messages['strSearching'] = "Searching";
PMA_messages['strHideSearchResults'] = "Hide search results";
PMA_messages['strShowSearchResults'] = "Show search results";
PMA_messages['strBrowsing'] = "Browsing";
PMA_messages['strDeleting'] = "Deleting";
PMA_messages['MissingReturn'] = "The definition of a stored function must contain a RETURN statement!";
PMA_messages['enum_editor'] = "ENUM/SET editor";
PMA_messages['enum_columnVals'] = "Values for column %s";
PMA_messages['enum_newColumnVals'] = "Values for a new column";
PMA_messages['enum_hint'] = "Enter each value in a separate field";
PMA_messages['enum_addValue'] = "Add %d value(s)";
PMA_messages['strImportCSV'] = "Note: If the file contains multiple tables, they will be combined into one.";
PMA_messages['strHideQueryBox'] = "Hide query box";
PMA_messages['strShowQueryBox'] = "Show query box";
PMA_messages['strEdit'] = "Edit";
PMA_messages['strNoRowSelected'] = "No rows selected";
PMA_messages['strChangeTbl'] = "Change";
PMA_messages['strQueryExecutionTime'] = "Query execution time";
PMA_messages['strNotValidRowNumber'] = "%d is not valid row number.";
PMA_messages['strSave'] = "Save";
PMA_messages['strHideSearchCriteria'] = "Hide search criteria";
PMA_messages['strShowSearchCriteria'] = "Show search criteria";
PMA_messages['strHideFindNReplaceCriteria'] = "Hide find and replace criteria";
PMA_messages['strShowFindNReplaceCriteria'] = "Show find and replace criteria";
PMA_messages['strZoomSearch'] = "Zoom Search";
PMA_messages['strDisplayHelp'] = "<ul><li>Each point represents a data row.</li><li>Hovering over a point will show its label.</li><li>To zoom in, select a section of the plot with the mouse.</li><li>Click reset zoom button to come back to original state.</li><li>Click a data point to view and possibly edit the data row.</li><li>The plot can be resized by dragging it along the bottom right corner.</li></ul>";
PMA_messages['strInputNull'] = "<strong>Select two columns</strong>";
PMA_messages['strSameInputs'] = "<strong>Select two different columns</strong>";
PMA_messages['strQueryResults'] = "Query results";
PMA_messages['strDataPointContent'] = "Data point content";
PMA_messages['strIgnore'] = "Ignore";
PMA_messages['strCopy'] = "Copy";
PMA_messages['strX'] = "X";
PMA_messages['strY'] = "Y";
PMA_messages['strPoint'] = "Point";
PMA_messages['strPointN'] = "Point %d";
PMA_messages['strLineString'] = "Linestring";
PMA_messages['strPolygon'] = "Polygon";
PMA_messages['strGeometry'] = "Geometry";
PMA_messages['strInnerRing'] = "Inner Ring";
PMA_messages['strOuterRing'] = "Outer Ring";
PMA_messages['strAddPoint'] = "Add a point";
PMA_messages['strAddInnerRing'] = "Add an inner ring";
PMA_messages['strAddPolygon'] = "Add a polygon";
PMA_messages['strAddColumns'] = "Add columns";
PMA_messages['strSelectReferencedKey'] = "Select referenced key";
PMA_messages['strSelectForeignKey'] = "Select Foreign Key";
PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "Please select the primary key or a unique key";
PMA_messages['strChangeDisplay'] = "Choose column to display";
PMA_messages['strLeavingDesigner'] = "You haven\'t saved the changes in the layout. They will be lost if you don\'t save them. Do you want to continue?";
PMA_messages['strAddOption'] = "Add an option for column ";
PMA_messages['strObjectsCreated'] = "%d object(s) created";
PMA_messages['strCellEditHint'] = "Press escape to cancel editing";
PMA_messages['strSaveCellWarning'] = "You have edited some data and they have not been saved. Are you sure you want to leave this page before saving the data?";
PMA_messages['strColOrderHint'] = "Drag to reorder";
PMA_messages['strSortHint'] = "Click to sort";
PMA_messages['strColMarkHint'] = "Click to mark/unmark";
PMA_messages['strColNameCopyHint'] = "Double-click to copy column name";
PMA_messages['strColVisibHint'] = "Click the drop-down arrow<br />to toggle column\'s visibility";
PMA_messages['strShowAllCol'] = "Show all";
PMA_messages['strAlertNonUnique'] = "This table does not contain a unique column. Features related to the grid edit, checkbox, Edit, Copy and Delete links may not work after saving.";
PMA_messages['strGridEditFeatureHint'] = "You can also edit most values<br />by double-clicking directly on them.";
PMA_messages['strGoToLink'] = "Go to link";
PMA_messages['strColNameCopyTitle'] = "Copy column name";
PMA_messages['strColNameCopyText'] = "Right-click the column name to copy it to your clipboard.";
PMA_messages['strShowDataRowLink'] = "Show data row(s)";
PMA_messages['strGeneratePassword'] = "Generate password";
PMA_messages['strGenerate'] = "Generate";
PMA_messages['strChangePassword'] = "Change Password";
PMA_messages['strMore'] = "More";
PMA_messages['strShowPanel'] = "Show Panel";
PMA_messages['strHidePanel'] = "Hide Panel";
PMA_messages['strUnhideNavItem'] = "Show hidden navigation tree items";
PMA_messages['strInvalidPage'] = "The requested page was not found in the history, it may have expired.";
PMA_messages['strNewerVersion'] = "A newer version of phpMyAdmin is available and you should consider upgrading. The newest version is %s, released on %s.";
PMA_messages['strLatestAvailable'] = ", latest stable version:";
PMA_messages['strUpToDate'] = "up to date";
PMA_messages['strCreateView'] = "Create view";
PMA_messages['strSendErrorReport'] = "Send Error Report";
PMA_messages['strSubmitErrorReport'] = "Submit Error Report";
PMA_messages['strErrorOccurred'] = "A fatal JavaScript error has occurred. Would you like to send an error report?";
PMA_messages['strChangeReportSettings'] = "Change Report Settings";
PMA_messages['strShowReportDetails'] = "Show Report Details";
PMA_messages['strTimeOutError'] = "Your export is incomplete, due to a low execution time limit at the PHP level";
var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
var pmaThemeImage = './themes/pmahomme/img/';
var pmaversion = '4.1.14';
var mysql_doc_template = './url.php?url=http%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2F%25s.html&amp;server=0&amp;token=662b4397b7f84d13d18237e5d9b610b9';
if ($.datepicker) {
$.datepicker.regional['']['closeText'] = "Done";
$.datepicker.regional['']['prevText'] = "Prev";
$.datepicker.regional['']['nextText'] = "Next";
$.datepicker.regional['']['currentText'] = "Today";
$.datepicker.regional['']['monthNames'] = ["January","February","March","April","May","June","July","August","September","October","November","December",];
$.datepicker.regional['']['monthNamesShort'] = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",];
$.datepicker.regional['']['dayNames'] = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday",];
$.datepicker.regional['']['dayNamesShort'] = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat",];
$.datepicker.regional['']['dayNamesMin'] = ["Su","Mo","Tu","We","Th","Fr","Sa",];
$.datepicker.regional['']['weekHeader'] = "Wk";
$.datepicker.regional['']['showMonthAfterYear'] = false;
$.datepicker.regional['']['yearSuffix'] = "";
$.extend($.datepicker._defaults, $.datepicker.regional['']);
} /* if ($.datepicker) */

if ($.timepicker) {
$.timepicker.regional['']['timeText'] = "Time";
$.timepicker.regional['']['hourText'] = "Hour";
$.timepicker.regional['']['minuteText'] = "Minute";
$.timepicker.regional['']['secondText'] = "Second";
$.extend($.timepicker._defaults, $.timepicker.regional['']);
} /* if ($.timepicker) */
                                                                                                                                                                      Ä                    T R A N S P ~ 1 . T M P s    «ƒ   Æƒ   Æƒ   ∏          ê             (   ( ê `   ‡          op      &à     ê Ä     òÂ     )cÌ~:{–’aÖ˚iç–˜è^jç–£ÏÑ˚iç– Ä                    T r a n s p o r t S e c u r i t y ~ R F 1 a a 5 1 1 4 . T M P ‰ƒ   «ƒ   «ƒ   @          ê             (   (          	"      	"     FILE0  ‚√     8  Úƒ   ‰ƒ   ‰ƒ   0          ê             (  (  ¯                ™˝     &     ˛ƒ   Úƒ 3ø                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                node
     * @param {Function} [pred] - predicate function
     */
    var listNext = function (node, pred) {
      pred = pred || func.fail;

      var nodes = [];
      while (node) {
        if (pred(node)) { break; }
        nodes.push(node);
        node = node.nextSibling;
      }
      return nodes;
    };

    /**
     * listing descendant nodes
     *
     * @param {Node} node
     * @param {Function} [pred] - predicate function
     */
    var listDescendant = function (node, pred) {
      var descendents = [];
      pred = pred || func.ok;

      // start DFS(depth first search) with node
      (function fnWalk(current) {
        if (node !== current && pred(current)) {
          descendents.push(current);
        }
        for (var idx = 0, len = current.childNodes.length; idx < len; idx++) {
          fnWalk(current.childNodes[idx]);
        }
      })(node);

      return descendents;
    };

    /**
     * wrap node with new tag.
     *
     * @param {Node} node
     * @param {Node} tagName of wrapper
     * @return {Node} - wrapper
     */
    var wrap = function (node, wrapperName) {
      var parent = node.parentNode;
      var wrapper = $('<' + wrapperName + '>')[0];

      parent.insertBefore(wrapper, node);
      wrapper.appendChild(node);

      return wrapper;
    };

    /**
     * insert node after preceding
     *
     * @param {Node} node
     * @param {Node} preceding - predicate function
     */
    var insertAfter = function (node, preceding) {
      var next = preceding.nextSibling, parent = preceding.parentNode;
      if (next) {
        parent.insertBefore(node, next);
      } else {
        parent.appendChild(node);
      }
      return node;
    };

    /**
     * append elements.
     *
     * @param {Node} node
     * @param {Collection} aChild
     */
    var appendChildNodes = function (node, aChild) {
      $.each(aChild, function (idx, child) {
        node.appendChild(child);
      });
      return node;
    };

    /**
     * returns whether boundaryPoint is left edge or not.
     *
     * @param {BoundaryPoint} point
     * @return {Boolean}
     */
    var isLeftEdgePoint = function (point) {
      return point.offset === 0;
    };

    /**
     * returns whether boundaryPoint is right edge or not.
     *
     * @param {BoundaryPoint} point
     * @return {Boolean}
     */
    var isRightEdgePoint = function (point) {
      return point.offset === nodeLength(point.node);
    };

    /**
     * returns whether boundaryPoint is edge or not.
     *
     * @param {BoundaryPoint} point
     * @return {Boolean}
     */
    var isEdgePoint = function (point) {
      return isLeftEdgePoint(point) || isRightEdgePoint(point);
    };

    /**
     * returns wheter node is left edge of ancestor or not.
     *
     * @param {Node} node
     * @param {Node} ancestor
     * @return {Boolean}
     */
    var isLeftEdgeOf = function (node, ancestor) {
      while (node && node !== ancestor) {
        if (position(node) !== 0) {
          return false;
        }
        node = node.parentNode;
      }

      return true;
    };

    /**
     * returns whether node is right edge of ancestor or not.
     *
     * @param {Node} node
     * @param {Node} ancestor
     * @return {Boolean}
     */
    var isRightEdgeOf = function (node, ancestor) {
      while (node && node !== ancestor) {
        if (position(node) !== nodeLength(node.parentNode) - 1) {
          return false;
        }
        node = node.parentNode;
      }

      return true;
    };

    /**
     * returns offset from parent.
     *
     * @param {Node} node
     */
    var position = function (node) {
      var offset = 0;
      while ((node = node.previousSibling)) {
        offset += 1;
      }
      return offset;
    };

    var hasChildren = function (node) {
      return !!(node && node.childNodes && node.childNodes.length);
    };

    /**
     * returns previous boundaryPoint
     *
     * @param {BoundaryPoint} point
     * @param {Boolean} isSkipInnerOffset
     * @return {BoundaryPoint}
     */
    var prevPoint = function (point, isSkipInnerOffset) {
      var node, offset;

      if (point.offset === 0) {
        if (isEditable(point.node)) {
          return null;
        }

        node = point.node.parentNode;
        offset = position(point.node);
      } else if (hasChildren(point.node)) {
        node = point.node.childNodes[point.offset - 1];
        offset = nodeLength(node);
      } else {
        node = point.node;
        offset = isSkipInnerOffset ? 0 : point.offset - 1;
      }

      return {
        node: node,
        offset: offset
      };
    };

    /**
     * returns next boundaryPoint
     *
     * @param {BoundaryPoint} point
     * @param {Boolean} isSkipInnerOffset
     * @return {BoundaryPoint}
     */
    var nextPoint = function (point, isSkipInnerOffset) {
      var node, offset;

      if (nodeLength(point.node) === point.offset) {
        if (isEditable(point.node)) {
          return null;
        }

        node = point.node.parentNode;
        offset = position(point.node) + 1;
      } else if (hasChildren(point.node)) {
        node = point.node.childNodes[point.offset];
        offset = 0;
      } else {
        node = point.node;
        offset = isSkipInnerOffset ? nodeLength(point.node) : point.offset + 1;
      }

      return {
        node: node,
        offset: offset
      };
    };

    /**
     * returns whether pointA and pointB is same or not.
     *
     * @param {BoundaryPoint} pointA
     * @param {BoundaryPoint} pointB
     * @return {Boolean}
     */
    var isSamePoint = function (pointA, pointB) {
      return pointA.node === pointB.node && pointA.offset === pointB.offset;
    };

    /**
     * returns whether point is visible (can set cursor) or not.
     * 
     * @param {BoundaryPoint} point
     * @return {Boolean}
     */
    var isVisiblePoint = function (point) {
      if (isText(point.node) || !hasChildren(point.node) || isEmpty(point.node)) {
        return true;
      }

      var leftNode = point.node.childNodes[point.offset - 1];
      var rightNode = point.node.childNodes[point.offset];
      if ((!leftNode || isVoid(leftNode)) && (!rightNode || isVoid(rightNode))) {
        return true;
      }

      return false;
    };

    /**
     * @method prevPointUtil
     *
     * @param {BoundaryPoint} point
     * @param {Function} pred
     * @return {BoundaryPoint}
     */
    var prevPointUntil = function (point, pred) {
      while (point) {
        if (pred(point)) {
          return point;
        }

        point = prevPoint(point);
      }

      return null;
    };

    /**
     * @method nextPointUntil
     *
     * @param {BoundaryPoint} point
     * @param {Function} pred
     * @return {BoundaryPoint}
     */
    var nextPointUntil = function (point, pred) {
      while (point) {
        if (pred(point)) {
          return point;
        }

        point = nextPoint(point);
      }

      return null;
    };

    /**
     * returns whether point has character or not.
     *
     * @param {Point} point
     * @return {Boolean}
     */
    var isCharPoint = function (point) {
      if (!isText(point.node)) {
        return false;
      }

      var ch = point.node.nodeValue.charAt(point.offset - 1);
      return ch && (ch !== ' ' && ch !== NBSP_CHAR);
    };

    /**
     * @method walkPoint
     *
     * @param {BoundaryPoint} startPoint
     * @param {BoundaryPoint} endPoint
     * @param {Function} handler
     * @param {Boolean} isSkipInnerOffset
     */
    var walkPoint = function (startPoint, endPoint, handler, isSkipInnerOffset) {
      var point = startPoint;

      while (point) {
        handler(point);

        if (isSamePoint(point, endPoint)) {
          break;
        }

        var isSkipOffset = isSkipInnerOffset &&
                           startPoint.node !== point.node &&
                           endPoint.node !== point.node;
        point = nextPoint(point, isSkipOffset);
      }
    };

    /**
     * @method makeOffsetPath
     *
     * return offsetPath(array of offset) from ancestor
     *
     * @param {Node} ancestor - ancestor node
     * @param {Node} node
     */
    var makeOffsetPath = function (ancestor, node) {
      var ancestors = listAncestor(node, func.eq(ancestor));
      return $.map(ancestors, position).reverse();
    };

    /**
     * @method fromOffsetPath
     *
     * return element from offsetPath(array of offset)
     *
     * @param {Node} ancestor - ancestor node
     * @param {array} offsets - offsetPath
     */
    var fromOffsetPath = function (ancestor, offsets) {
      var current = ancestor;
      for (var i = 0, len = offsets.length; i < len; i++) {
        if (current.childNodes.length <= offsets[i]) {
          current = current.childNodes[current.childNodes.length - 1];
        } else {
          current = current.childNodes[offsets[i]];
        }
      }
      return current;
    };

    /**
     * @method splitNode
     *
     * split element or #text
     *
     * @param {BoundaryPoint} point
     * @param {Object} [options]
     * @param {Boolean} [options.isSkipPaddingBlankHTML] - default: false
     * @param {Boolean} [options.isNotSplitEdgePoint] - default: false
     * @return {Node} right node of boundaryPoint
     */
    var splitNode = function (point, options) {
      var isSkipPaddingBlankHTML = options && options.isSkipPaddingBlankHTML;
      var isNotSplitEdgePoint = options && options.isNotSplitEdgePoint;

      // edge case
      if (isEdgePoint(point) && (isText(point.node) || isNotSplitEdgePoint)) {
        if (isLeftEdgePoint(point)) {
          return point.node;
        } else if (isRightEdgePoint(point)) {
          return point.node.nextSibling;
        }
      }

      // split #text
      if (isText(point.node)) {
        return point.node.splitText(point.offset);
      } else {
        var childNode = point.node.childNodes[point.offset];
        var clone = insertAfter(point.node.cloneNode(false), point.node);
        appendChildNodes(clone, listNext(childNode));

        if (!isSkipPaddingBlankHTML) {
          paddingBlankHTML(point.node);
          paddingBlankHTML(clone);
        }

        return clone;
      }
    };

    /**
     * @method splitTree
     *
     * split tree by point
     *
     * @param {Node} root - split root
     * @param {BoundaryPoint} point
     * @param {Object} [options]
     * @param {Boolean} [options.isSkipPaddingBlankHTML] - default: false
     * @param {Boolean} [options.isNotSplitEdgePoint] - default: false
     * @return {Node} right node of boundaryPoint
     */
    var splitTree = function (root, point, options) {
      // ex) [#text, <span>, <p>]
      var ancestors = listAncestor(point.node, func.eq(root));

      if (!ancestors.length) {
        return null;
      } else if (ancestors.length === 1) {
        return splitNode(point, options);
      }

      return ancestors.reduce(function (node, parent) {
        if (node === point.node) {
          node = splitNode(point, options);
        }

        return splitNode({
          node: parent,
          offset: node ? dom.position(node) : nodeLength(parent)
        }, options);
      });
    };

    /**
     * split point
     *
     * @param {Point} point
     * @param {Boolean} isInline
     * @return {Object}
     */
    var splitPoint = function (point, isInline) {
      // find splitRoot, container
      //  - inline: splitRoot is a child of paragraph
      //  - block: splitRoot is a child of bodyContainer
      var pred = isInline ? isPara : isBodyContainer;
      var ancestors = listAncestor(point.node, pred);
      var topAncestor = list.last(ancestors) || point.node;

      var splitRoot, container;
      if (pred(topAncestor)) {
        splitRoot = ancestors[ancestors.length - 2];
        container = topAncestor;
      } else {
        splitRoot = topAncestor;
        container = splitRoot.parentNode;
      }

      // if splitRoot is exists, split with splitTree
      var pivot = splitRoot && splitTree(splitRoot, point, {
        isSkipPaddingBlankHTML: isInline,
        isNotSplitEdgePoint: isInline
      });

      // if container is point.node, find pivot with point.offset
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ˇ
«¶ÛêˇˇÚêˇˇ
ﬂıWÛêˇˇÚêˇˇ
·ıWÛêˇˇÚêˇˇ
ÈıWÛêˇˇÚêˇˇ
ÒıWÛêˇˇÚêˇˇ
˘ıWÛêˇˇÚêˇˇˆúˆôˇˇÛêˇˇÚêˇˇ˘ïˆôˇˇÛêˇˇÚêˇˇ
‹ˆWÛêˇˇÚêˇˇ
œÀ	ÛêˇˇÚêˇˇ
ÏˆWÛêˇˇÚêˇˇ
ÙˆWÛêˇˇÚêˇˇ
ˆˆWÛêˇˇÚêˇˇ
¯ˆWÛêˇˇÚêˇˇ÷‘	ˆôˇˇÛêˇˇÚêˇˇ
Õ˜WÛêˇˇÚêˇˇ
’˜WÛêˇˇÚêˇˇ
›˜WÛêˇˇÚêˇˇ
Â˜WÛêˇˇÚêˇˇ¬Ï÷ôˇˇÛêˇˇÚêˇˇ
˙˜WÛêˇˇÚêˇˇ
È£AÛêˇˇÚêˇˇœﬂˆôˇˇÛêˇˇÚêˇˇ
◊¯WÛêˇˇÚêˇˇ
Íæ>ÛêˇˇÚêˇˇ
Á¯WÛêˇˇÚêˇˇ
È¯WÛêˇˇÚêˇˇÛßˆôˇˇÛêˇˇÚêˇˇ
¯¯WÛêˇˇÚêˇˇ
¿˘WÛêˇˇÚêˇˇ
Ò¶	ÛêˇˇÚêˇˇ
–˘WÛêˇˇÚêˇˇ
ÿ˘WÛêˇˇÚêˇˇ
ÏúÛêˇˇÚêˇˇ
—‚(ÛêˇˇÚêˇˇ
˘WÛêˇˇÚêˇˇ
¯˘WÛêˇˇÚêˇˇ
¿˙WÛêˇˇÚêˇˇ
¬˙WÛêˇˇÚêˇˇ
 ˙WÛêˇˇÚêˇˇ
“˙WÛêˇˇÚêˇˇ›ˆôˇˇÓ·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇ€üˆôˇˇÛêˇˇÚêˇˇ
˛˙WÛêˇˇÚêˇˇ
∆˚WÛêˇˇÚêˇˇƒ£ˆôˇˇÛêˇˇÚêˇˇ
À˘ÛêˇˇÚêˇˇ
È˚WÛêˇˇÚêˇˇ
Ò˚WÛêˇˇÚêˇˇ
˘˚WÛêˇˇÚêˇˇ
¡¸WÛêˇˇÚêˇˇ
…¸WÛêˇˇÚêˇˇ
—¸WÛêˇˇÚêˇˇ
”¸WÛêˇˇÚêˇˇ»åˆôˇˇÛêˇˇÚêˇˇ
‚¸WÛêˇˇÚêˇˇ
ﬁ¸WÛêˇˇÚêˇˇ
Ê¸WÛêˇˇÚêˇˇ
Ó¸WÛêˇˇÚêˇˇ
ˆ¸WÛêˇˇÚêˇˇ
˛¸WÛêˇˇÚêˇˇ
Ù¿UÛêˇˇÚêˇˇ
Œ˝WÛêˇˇÚêˇˇ
˘úÛêˇˇÚêˇˇ
ﬁ˝WÛêˇˇÚêˇˇ
Ê˝WÛêˇˇÚêˇˇ„’ˆôˇˇÛêˇˇÚêˇˇ
˚˝WÛêˇˇÚêˇˇ
√˛WÛêˇˇÚêˇˇ
 ˜ÛêˇˇÚêˇˇ
˙ÌBÛêˇˇÚêˇˇÌÔ	ˆôˇˇÓ·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇÊ˜ˆôˇˇÛêˇˇÚêˇˇ
ˇ˛WÛêˇˇÚêˇˇ
«ˇWÛêˇˇÚêˇˇ
œˇWÛêˇˇÚêˇˇ
◊ˇWÛêˇˇÚêˇˇÀì
ˆôˇˇÛêˇˇÚêˇˇ
ÏˇWÛêˇˇÚêˇˇ
ÙˇWÛêˇˇÚêˇˇ
 ‹JÛêˇˇÚêˇˇ”ﬁˆôˇˇÓ·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇ‹ˇˆôˇˇÛêˇˇÚêˇˇ
‚ÄXÛêˇˇÚêˇˇ
ÍÄXÛêˇˇÚêˇˇ
ÚÄXÛêˇˇÚêˇˇ
·ÿÛêˇˇÚêˇˇ
¬ÅXÛêˇˇÚêˇˇ
 ÅXÛêˇˇÚêˇˇ
∆ìÛêˇˇÚêˇˇ
˚è"ÛêˇˇÚêˇˇ
‚ÅXÛêˇˇÚêˇˇÈëˆôˇˇÛêˇˇÚêˇˇ
ÒÅXÛêˇˇÚêˇˇ
˘ÅXÛêˇˇÚêˇˇ
‘ÙWÛêˇˇÚêˇˇ
Ôû
ÛêˇˇÚêˇˇ
‰∫TÛêˇˇÚêˇˇ
ŸÇXÛêˇˇÚêˇˇ
·ÇXÛêˇˇÚêˇˇ
Œ∞ÛêˇˇÚêˇˇÃ∆ˆôˇˇÛêˇˇÚêˇˇ˜∆	ˆôˇˇÛêˇˇÚêˇˇ
ÀÉXÛêˇˇÚêˇˇ
”ÉXÛêˇˇÚêˇˇ
€ÉXÛêˇˇÚêˇˇ«ÉˆôˇˇÛêˇˇÚêˇˇ
ÉXÛêˇˇÚêˇˇ
¯ÉXÛêˇˇÚêˇˇ€ã	ˆôˇˇÛêˇˇÚêˇˇÒù
ˆôˇˇÛêˇˇÚêˇˇ
⁄ÑXÛêˇˇÚêˇˇ’ÃˆôˇˇÛêˇˇÚêˇˇ
ﬂ‡UÛêˇˇÚêˇˇ
˜ÑXÛêˇˇÚêˇˇ
ˇÑXÛêˇˇÚêˇˇ
Á∏	ÛêˇˇÚêˇˇ
œÖXÛêˇˇÚêˇˇˆœˆôˇˇÛêˇˇÚêˇˇ
‚”ÛêˇˇÚêˇˇ
ÊÖXÛêˇˇÚêˇˇ
ÓÖXÛêˇˇÚêˇˇ
ˆå&ÛêˇˇÚêˇˇˆëˆôˇˇÛêˇˇÚêˇˇ
≈ÜXÛêˇˇÚêˇˇ
ŸìDÛêˇˇÚêˇˇ
’ÜXÛêˇˇÚêˇˇ‡ﬁ	ˆôˇˇÛêˇˇÚêˇˇ
ÍÜXÛêˇˇÚêˇˇÏíˆôˇˇÛêˇˇÚêˇˇ
ˇÜXÛêˇˇÚêˇˇ
«áXÛêˇˇÚêˇˇ
»˛WÛêˇˇÚêˇˇ
◊áXÛêˇˇÚêˇˇ
ﬂáXÛêˇˇÚêˇˇ
ÁáXÛêˇˇÚêˇˇ
–©ÛêˇˇÚêˇˇ
˜áXÛêˇˇÚêˇˇ
ˇáXÛêˇˇÚêˇˇ
«àXÛêˇˇÚêˇˇ
ÔÙ	ÛêˇˇÚêˇˇ
∆òXÛêˇˇÚêˇˇ
ÂàXÛêˇˇÚêˇˇ–œˆôˇˇÛêˇˇÚêˇˇ
˙àXÛêˇˇÚêˇˇ
¬âXÛêˇˇÚêˇˇ
 âXÛêˇˇÚêˇˇ
“âXÛêˇˇÚêˇˇ
⁄âXÛêˇˇÚêˇˇ
‚âXÛêˇˇÚêˇˇ
¸ÿUÛêˇˇÚêˇˇ
ÏâXÛêˇˇÚêˇˇ
ÙâXÛêˇˇÚêˇˇ
¸âXÛêˇˇÚêˇˇ
ƒäXÛêˇˇÚêˇˇÏ≥ˆôˇˇÓ·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇ∆ÑˆôˇˇÛêˇˇÚêˇˇ
‰äXÛêˇˇÚêˇˇ
ÏäXÛêˇˇÚêˇˇÂ∏Ó·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇ
∆ãXÛêˇˇÚêˇˇ
€ê1ÛêˇˇÚêˇˇ
÷ãXÛêˇˇÚêˇˇ
ﬁãXÛêˇˇÚêˇˇ
ÊÉXÛêˇˇÚêˇˇ¬ÓˆôˇˇÓ·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇÔÂˆôˇˇÛêˇˇÚêˇˇ
“åXÛêˇˇÚêˇˇœÆˆôˇˇÛêˇˇÚêˇˇ
€åXÛêˇˇÚêˇˇ
„åXÛêˇˇÚêˇˇ
‚ÜXÛêˇˇÚêˇˇ
 åXÛêˇˇÚêˇˇ
“åXÛêˇˇÚêˇˇ
⁄åXÛêˇˇÚêˇˇ
‹åXÛêˇˇÚêˇˇ
‰åXÛêˇˇÚêˇˇ
ÏåXÛêˇˇÚêˇˇ
ÓåXÛêˇˇÚêˇˇ
ˆåXÛêˇˇÚêˇˇ
˛åXÛêˇˇÚêˇˇ
∆çXÛêˇˇÚêˇˇﬁªÓ·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇ
‡çXÛêˇˇÚêˇˇƒí	ˆôˇˇÓ·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇ·ËˆôˇˇÛêˇˇÚêˇˇ
‡ËÛêˇˇÚêˇˇ
¿ÉÛêˇˇÚêˇˇ
⁄ÉÛêˇˇÚêˇˇ
‰éXÛêˇˇÚêˇˇ
Â‡(ÛêˇˇÚêˇˇ
ÙéXÛêˇˇÚêˇˇ˜¡ˆôˇˇÛêˇˇÚêˇˇ
…èXÛêˇˇÚêˇˇÎ§
ˆôˇˇÛêˇˇÚêˇˇ
◊ëNÛêˇˇÚêˇˇ
¸åXÛêˇˇÚêˇˇ
ÓèXÛêˇˇÚêˇˇ
ˆèXÛêˇˇÚêˇˇ
‹Ã1ÛêˇˇÚêˇˇ
÷ÓKÛêˇˇÚêˇˇ
ŒêXÛêˇˇÚêˇˇ
÷êXÛêˇˇÚêˇˇ
ﬁêXÛêˇˇÚêˇˇ
ÊêXÛêˇˇÚêˇˇ
ÓêXÛêˇˇÚêˇˇÃ™Ó·˚ˇÛêˇˇﬂ·˚ˇÚêˇˇ
˝€FÛêˇˇÚêˇˇ
 ëXÛêˇˇÚêˇˇ
“ëXÛêˇˇÚêˇˇ
⁄ëXÛêˇˇÚêˇˇ
‚ëXÛêˇˇÚêˇˇ
€ø	ÛêˇˇÚêˇˇ…Ù≈˚ˇˇ©÷ôˇˇ”é÷ôˇˇÃéX÷ôˇˇ—≠	÷ôˇˇÚãX÷ôˇˇ«±ˆôˇˇÛÅˆôˇˇ›◊ˆôˇˇÈ ˆôˇˇÊàˆôˇˇˆˆôˇˇÙÒˆôˇˇ¿Àˆôˇˇ“ıˆôˇˇ„ùˆôˇˇÃìˆôˇˇƒﬁˆôˇˇ‡œˆôˇˇ÷‚ˆôˇˇ‚ªˆôˇˇ˛ÛˆôˇˇÚÛˆôˇˇ„Æ	ˆôˇˇÿäˆôˇˇÏô	ˆôˇˇ¬ÛˆôˇˇÏäˆôˇˇˇÚˆôˇˇÓƒ	ˆôˇˇÙÇˆôˇˇÚˆôˇˇÂÒˆôˇˇÕÕˆôˇˇ¸‘	ˆôˇˇÙËˆôˇˇ⁄ëˆôˇˇ˜Ôˆôˇˇ›‡ˆôˇˇ≈Ìˆôˇˇ‚∞ˆôˇˇÙÕˆôˇˇ˛˜ˆôˇˇÿÓˆôˇˇ·∞ˆôˇˇ¸∞ˆôˇˇ‘Òˆôˇˇ€óˆôˇˇ»”ˆôˇˇ÷Ù	ˆôˇˇ÷€ˆôˇˇÀôˆôˇˇ≈£	ˆôˇˇÓ¨
ˆôˇˇÕÑˆôˇˇÍùˆôˇˇ›ﬁˆôˇˇƒˇˆôˇˇ‹Ì	ˆôˇˇ˘‘ˆôˇˇÿŒˆôˇˇÒÏˆôˇˇÍàˆôˇˇÌÔˆôˇˇ¯ŒˆôˇˇÌçˆôˇˇ◊∑ˆôˇˇ‹—ˆôˇˇÛöˆôˇˇ“‰ˆôˇˇÁËˆôˇˇÎÁˆôˇˇ˙˚ˆôˇˇÃÙˆôˇˇ…®ˆôˇˇ¬»ˆôˇˇÊˆôˇˇÙ∫ˆôˇˇÿÊˆôˇˇßˆôˇˇˆµ	ˆôˇˇœ¯ˆôˇˇÀãˆôˇˇÿÓˆôˇˇ…œˆôˇˇÚÔ	ˆôˇˇ—ÜˆôˇˇˇﬂˆôˇˇÛ“ˆôˇˇ˙„ˆôˇˇÓ„ˆôˇˇ“îˆôˇˇ⁄Ûˆôˇˇ≈∫ˆôˇˇÕ™	ˆôˇˇ¸ÛˆôˇˇË‘ˆôˇˇÓ·ˆôˇˇ…»ˆôˇˇ·µˆôˇˇÈÄˆôˇˇÔ¸ˆôˇˇÌÈˆôˇˇ ”ˆôˇˇ˝ﬂˆôˇˇ√§ˆôˇˇ˛¸ˆôˇˇÒ’ˆôˇˇ‰Ωˆôˇˇ–˙ˆôˇˇÎπˆôˇˇ¬◊ˆôˇˇ”Úˆôˇˇ„éˆôˇˇÃﬂˆôˇˇ¿ﬂˆôˇˇ¬Éˆôˇˇ‹èˆôˇˇﬂ≈ˆôˇˇÎÌˆôˇˇ„£ˆôˇˇ⁄∫ˆôˇˇ◊›ˆôˇˇ·ßˆôˇˇ∆≠ˆôˇˇŒªˆôˇˇ“¬ˆôˇˇ◊∑ˆôˇˇÒ›ˆôˇˇÈ€ˆôˇˇƒ–ˆôˇˇıŸˆôˇˇ«±ˆôˇˇÂ¸ˆôˇˇ‰¬ˆôˇˇ¯‹ˆôˇˇ˘¯ˆôˇˇÌ˜ˆôˇˇÏõˆôˇˇÔŸˆôˇˇ√Ãˆôˇˇ˙˜ˆôˇˇÃÿˆôˇˇ…ÓˆôˇˇÏ◊ˆôˇˇÈßˆôˇˇÒˇˆôˇˇ˘˘ˆôˇˇ⁄Ôˆôˇˇ–”ˆôˇˇŸ˙ˆôˇˇÒ…ˆôˇˇﬁΩˆôˇˇ‘ªˆôˇˇˇÅˆôˇˇÚ÷ˆôˇˇ—÷ˆôˇˇ¡¨ˆôˇˇÓ®ˆôˇˇ–˚ˆôˇˇÏ˘ˆôˇˇŒÜˆôˇˇƒ™
ˆôˇˇ¬Êˆôˇˇ∆µˆôˇˇÛ˙ˆôˇˇ€÷	ˆôˇˇ‰‚ˆôˇˇÌ≥ˆôˇˇ¸˝ˆôˇˇ’ÓˆôˇˇÌ”ˆôˇˇ·”ˆôˇˇƒÇˆôˇˇˆ«ˆôˇˇŒâˆôˇˇˆ«ˆôˇˇÁ‡ˆôˇˇ¸Ïˆôˇˇ◊ä
ˆôˇˇ¸€ˆôˇˇ‡„ˆôˇˇˇˆôˇˇ¿¸ˆôˇˇ€•ˆôˇˇﬂˇˆôˇˇ›¸ˆôˇˇ€ˆôˇˇ¿ÅˆôˇˇÚãˆôˇˇ‹ú
ˆôˇˇ—∂ˆôˇˇ—¶ˆôˇˇ –ˆôˇˇ∆£ˆôˇˇ»œˆôˇˇÌ¿	ˆôˇˇˆÕˆôˇˇ“êˆôˇˇÂÊˆôˇˇ‹˙ˆôˇˇ—˝ˆôˇˇ¿£ˆôˇˇŸ∂ˆôˇˇ¯Àˆôˇˇ€ÖˆôˇˇŒ‚ˆôˇˇÚÈˆôˇˇ’Ûˆôˇˇ“ıˆôˇˇ˝ ˆôˇˇ‚Ç
ˆôˇˇ‡ƒˆôˇˇ¬ÍˆôˇˇÙœˆôˇˇ˛≈ˆôˇˇı˛ˆôˇˇ⁄áˆôˇˇ÷ôˆôˇˇ’éˆôˇˇ˜◊ˆôˇˇ—˜ˆôˇˇ«˙ˆôˇˇÒ»ˆôˇˇÍÃ	ˆôˇˇ–…
ˆôˇˇÿÓˆôˇˇ«›ˆôˇˇ∆ƒˆôˇˇÂ∞ˆôˇˇ‰Ÿˆôˇˇ»¯ˆôˇˇ˚Íˆôˇˇ€ÊˆôˇˇÏÎˆôˇˇÙêˆôˇˇ˙Ëˆôˇˇ·ªˆôˇˇﬁâˆôˇˇ√í
ˆôˇˇ¡ÓˆôˇˇƒÓˆôˇˇ≈ˇˆôˇˇÍÏˆôˇˇˆÅˆôˇˇˆºˆôˇˇ·’ˆôˇˇ⁄Ôˆôˇˇ›Éˆôˇˇ“èˆôˇˇˆßˆôˇˇÈ·	ˆôˇˇ’æˆôˇˇˇÚˆôˇˇ˝–ˆôˇˇ˛´ˆôˇˇÂëˆôˇˇ‚öˆôˇˇÃ°ˆôˇˇˇÌˆôˇˇÚŸˆôˇˇ¸üˆôˇˇ…çˆôˇˇÕµ
ˆôˇˇŒˆôˇˇ◊»ˆôˇˇ‰ôˆôˇˇÕÀˆôˇˇ€ºˆôˇˇƒæˆôˇˇŒ∫ˆôˇˇ√Úˆôˇˇ√…	ˆôˇˇ¯ëˆôˇˇﬁºˆôˇˇÃãˆôˇˇ€Åˆôˇˇ¯¡ˆôˇˇﬂÓˆôˇˇ¿Åˆôˇˇ◊‘ˆôˇˇ¡˝	ˆôˇˇÕªˆôˇˇ›∫ˆôˇˇ˘·	ˆôˇˇ˝êˆôˇˇ ñˆôˇˇ¸ÌˆôˇˇÊÊˆôˇˇ˛¡ˆôˇˇ«‚ˆôˇˇ“ßˆôˇˇÀ»ˆôˇˇŒµˆôˇˇ¯Öˆôˇˇ˜˘ˆôˇˇƒ™ˆôˇˇˆÃ	ˆôˇˇÀÚˆôˇˇ›∆ˆôˇˇˇ˘ˆôˇˇ«ÕˆôˇˇÈÜˆôˇˇ¯≥ˆôˇˇ‰˘ˆôˇˇ‡≥ˆôˇˇÈ÷ˆôˇˇˆ›ˆôˇˇÎˆôˇˇ∆˜ˆôˇˇÓªˆôˇˇÃ±ˆôˇˇ≠ˆôˇˇ‚ïˆôˇˇ€ÑˆôˇˇÒ∞ˆôˇˇÚùˆôˇˇ÷∏ˆôˇˇÏ≈ˆôˇˇ¡∞ˆôˇˇ‡ØˆôˇˇœÔˆôˇˇ–Òˆôˇˇ¸‚ˆôˇˇÓ ˆôˇˇƒ∏ˆôˇˇ‡Æˆôˇˇ‘Æˆôˇˇ‘¯ˆôˇˇˆûˆôˇˇƒ‹ˆôˇˇ‘˜ˆôˇˇÌ´ˆôˇˇˆôˇˇıÆˆôˇˇ˘Õˆôˇˇ“ãˆôˇˇËëˆôˇˇ–¶ˆôˇˇ˙ùˆôˇˇ…ˆôˇˇ«·ˆôˇˇÎçˆôˇˇ«©ˆôˇˇÓØˆôˇˇÿ˘ˆôˇˇÛ∂ˆôˇˇÁ¥ˆôˇˇ–åˆôˇˇ√±
ˆôˇˇﬁßˆôˇˇ·˙ˆôˇˇ‰óˆôˇˇ·≈ˆôˇˇˆ¶ˆôˇˇÏåˆôˇˇÁÉˆôˇˇÙÖˆôˇˇ—¥ˆôˇˇÙ⁄ˆôˇˇÒâˆôˇˇƒñˆôˇˇŒôˆôˇˇıàˆôˇˇÕ™ˆôˇˇ‚∞ˆôˇˇﬂçˆôˇˇŒñˆôˇˇˆÉˆôˇˇ„Ø
ˆôˇˇÚ˝ˆôˇˇÀóˆôˇˇ÷‹ˆôˇˇÌ°ˆôˇˇÎµÓ·˚ˇÊµÓ·˚ˇƒàÓ·˚ˇÒ¸Ó·˚ˇ”µÓ·˚ˇˇÿÓ·˚ˇ◊¥Ó·˚ˇ⁄¥Ó·˚ˇ’¥Ó·˚ˇ≥Ó·˚ˇ„≥Ó·˚ˇﬁ≥Ó·˚ˇÈ≤Ó·˚ˇÔüÓ·˚ˇ˝±Ó·˚ˇˆÀÓ·˚ˇ·±Ó·˚ˇ‹±Ó·˚ˇˇ∞Ó·˚ˇØÓ·˚ˇÎØÓ·˚ˇﬁØÓ·˚ˇ≈Ó·˚ˇ‚÷Ó·˚ˇÎÆÓ·˚ˇ–⁄Ó·˚ˇÔÆÓ·˚ˇ⁄ÆÓ·˚ˇ≈≠Ó·˚ˇ€óÓ·˚ˇÔ¨Ó·˚ˇ⁄¨Ó·˚ˇ‰…Ó·˚ˇ˛´Ó·˚ˇ¡¨Ó·˚ˇ¸´Ó·˚ˇÁ´Ó·˚ˇÍ´Ó·˚ˇ»†Ó·˚ˇ˛™Ó·˚ˇ¡´Ó·˚ˇÌ“Ó·˚ˇÂ™Ó·˚ˇÏ‰Ó·˚ˇ…™Ó·˚ˇƒ©Ó·˚ˇ◊®Ó·˚ˇ”°Ó·˚ˇÈßÓ·˚ˇ‰ßÓ·˚ˇÁßÓ·˚ˇ“ßÓ·˚ˇ≈˝Ó·˚ˇ¿„Ó·˚ˇ˜¶Ó·˚ˇ˙¶Ó·˚ˇÂ¶Ó·˚ˇ˙ΩÓ·˚ˇ›üÓ·˚ˇËûÓ·˚ˇ≈ÎÓ·˚ˇÃ‡Ó·˚ˇÕ˚Ó·˚ˇ˚°Ó·˚ˇ‰ÈÓ·˚ˇ»ûÓ·˚ˇ˚ùÓ·˚ˇ˛ùÓ·˚ˇ’ÍÓ·˚ˇ“ùÓ·˚ˇÕùÓ·˚ˇËúÓ·˚ˇ—úÓ·˚ˇ‘úÓ·˚ˇˇöÓ·˚ˇ˙öÓ·˚ˇÂöÓ·˚ˇ¯ôÓ·˚ˇ˜æÓ·˚ˇÈ§Ó·˚ˇ“ÄYÛêˇˇÙ˚XÛêˇˇ·˚XÛêˇˇıˆXÛêˇˇÈıXÛêˇˇﬂÌXÛêˇˇ“ÌXÛêˇˇ…‘ﬂ·˚ˇ¸≠ﬂ·˚ˇﬂìﬂ·˚ˇÚ…ﬂ·˚ˇ¡≠ﬂ·˚ˇÚ¨ﬂ·˚ˇÈ…ﬂ·˚ˇ‚©ﬂ·˚ˇ„©ﬂ·˚ˇ√§
ˆôˇˇﬂ·˚ˇÓ·˚ˇ¯ 
÷ôˇˇˆôˇˇﬂ·˚ˇÓ·˚ˇÛÎ÷ôˇˇˆôˇˇﬂ·˚ˇÓ·˚ˇ„ÂÚêˇˇÛêˇˇﬂ·˚ˇÓ·˚ˇ‘˙ÚêˇˇÛêˇˇﬂ·˚ˇÓ·˚ˇ›ÆÚêˇˇÛêˇˇˆôˇˇÓ·˚ˇ÷ôˇˇﬂ·˚ˇŸ√ÚêˇˇÛêˇˇﬂ·˚ˇÓ·˚ˇƒ®
ÚêˇˇÛêˇˇﬂ·˚ˇÓ·˚ˇ
Òëﬂ·˚ˇÚêˇˇÀüÚêˇˇÛêˇˇˆôˇˇﬂ·˚ˇÓ·˚ˇ‘ÁÚêˇˇÛêˇˇﬂ·˚ˇÓ·˚ˇ‹≠ﬂ·˚ˇœÀﬂ·˚ˇ‹´ﬂ·˚ˇÈF∆ß                                                                                                                                                                                                                                                                                                                                                                                                                     >Support 'as' keyword in import statements.</li> 
 <li>Implemented Refactoring: Pull Members Up/Push Members Down</li> 
 <li>Support extern interfaces. (Issue #202)</li> 
 <li>Fix visibility determination for methods. (Better completions)</li> 
 <li>Check for duplicate imports when copy/pasting.</li> 
 <li> Fix resolving classes that appear inside of an import file with a different name than the class itself. Fixes goto declaration as well. </li> 
 <li>Fix colorizing identifiers (variable names) in code.</li> 
 <li>Fix Issue 162: &quot;call(new x(), new x());&quot; parse failure.</li> 
 <li>(Re)Allow &quot;new&quot; for extern and prototype function declarations.</li> 
 <li>Fixed IDEA freeze when XML is edited</li> 
 <li>Implemented Refactoring: Extract Superclass</li> 
 <li>Implemented Refactoring: Extract Interface</li> 
 <li>Implemented Refactoring: Push Members Down</li> 
 <li>Fixed OutOfBoundsException when resolving names.</li> 
 <li>Fix most unit tests.</li> 
</ul> 
<p>0.9.2: (community release, IDEA 14 only)</p> 
<ul> 
 <li>Fixed: HaxeReferenceCopyPasteProcessor issue preventing from using copy paste clipboard functionality</li> 
</ul> 
<p>0.9: (community release)</p> 
<ul> 
 <li>Release ID change only</li> 
</ul> 
<p>0.8.1.1.TiVo.4: (community version, TiVo Release 4)</p> 
<ul> 
 <li>Class Hierarchy view panels implemented. (Menu-&gt;Navigate-&gt;Type Hierarchy, et al)</li> 
 <li>Better handling of import files.</li> 
 <li>Better handling of Haxe language parsing, including many Haxe 3 features.</li> 
 <li>Automatic detection and use of installed haxe libraries (using the 'haxelib' command).</li> 
 <li>Better completion (Ctrl-space) using the Haxe compiler -- OpenFL projects only.</li> 
 <li>Refactorings: 
  <ul> 
   <li>Pull up members from class to super-class</li> 
   <li>Pull up members from class to interface</li> 
   <li>Split into declaration and assignment</li> 
   <li>Optimize imports</li> 
  </ul> </li> 
 <p> The following sub-releases are included:</p> 
 <ul> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.16: (community version, TiVo RC5)</p> 
   <ul> 
    <li>Refactoring: Pull up members from class to super-class</li> 
    <li>Refactoring: Pull up members from class to interface</li> 
    <li>Launch Haxe/Neko tests (Patch #131)</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.15: (community version, TiVo RC4)</p> 
   <ul> 
    <li>Fixed issue 37 (Parser doesn't recover after new A)</li> 
    <li>Fixed issue 95 (Local and class variable names resolving to similar package names)</li> 
    <li>Fixed issue 132 (incorrect processing of duplicate imports)</li> 
    <li>Fixed issue 134 (incorrect reformat of object and array children)</li> 
    <li>Fixed reference resolution for expressions in parenthesis - otherwise, code assist does not work for those.</li> 
    <li>Fixed: launching test with neko, overriding haxe build parameters for test run configuration, filtering test result output, compilation path of non test build, line number for ErrorFilter; and removed hard-coded path for ErrorFilter</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.14: (community version, TiVo RC3)</p> 
   <ul> 
    <li>Fixed NPE causing the structure view to not populate, resulting from an errant merge.</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.13: (community version, TiVo RC2)</p> 
   <ul> 
    <li>Resolve 'convenience' imports that do not export a class named similarly to the file. (TiVo Issue #55)</li> 
    <li>Update unbalanced preprocessor token highlighting and detection.</li> 
    <li>Improve indentation of comments and preprocessor macros.</li> 
    <li>Update for Grammar-Kit 1.2.0.1 </li> 
    <li>Fixed syntax rules (BNF) for constructors and external functions.</li> 
    <li>Fixed syntax rules (BNF) for code blocks; removed them from being valid syntax everywhere an expression can appear.</li> 
    <li>Fixed syntax rules (BNF) to allow meta tags on typedefs.</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.12: (community version, TiVo RC1+Fixes)</p> 
   <ul> 
    <li>Auto-indent when adding curly brackets now works correctly. Fixes github tivo/intellij-haxe Issue #119. (Thanks, J&eacute;r&eacute;my!)</li> 
    <li>Fix IDE hang on completion for Haxe compiler completions.</li> 
    <li>Fix auto-adding new import statements above package declaration and/or comments.</li> 
    <li>Fix NPE when manually adding new import statements.</li> 
    <li>Put debugging dialogs on the UI thread.</li> 
    <li>Fix ArrayOutOfBounds exception when initializing haxelib cache.</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.11: (community version, TiVo RC1)</p> 
   <ul> 
    <li>Fix NPE when colorizing.</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.10: (community version, TiVo WIP)</p> 
   <ul> 
    <li> Added timeout to long-running call hierarchy searches. </li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.9: (community version, TiVo WIP)</p> 
   <ul> 
    <li> Fixed Haxe command-line debugger integration for OpenFL projects that are targetting C++ native runtime environments. </li> 
    <li> Fixed method hierarchy runtime exceptions, and auto-scrolling to source. </li> 
    <li> Fixed type hierarchy auto-scrolling to source. </li> 
    <li> Enhanced run &amp; debug output to be color-coded for improved readability. </li> 
    <li> Fixed find-usages regression. </li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.8: (community version, TiVo WIP)</p> 
   <ul> 
    <li> More load-time optimizations using new 'haxelib list-path' command. </li> 
    <li> Add package and file names to Type hierarchy window. (File names only display if the file name differs from the type name.) </li> 
    <li> Fixed supertypes list in the combo view of the Type hierarchy window. </li> 
    <li> Allow block statements everywhere. </li> 
    <li> Allow array literals to have additional comma [1,] </li> 
    <li> Moving a file from one package to another no longer displays &quot;Unimplemented&quot; and now moves the file, however references are not yet updated. Issue #88 -- still unresolved. </li> 
    <li> Updated unit tests. Issues: #71, #68.</li> 
    <li> Fix formatting for &quot;&gt;=&quot;, which is used be to reformatted to &quot;&gt; =&quot;. Issue </li> 
    <li> Fix logic for HaxeIfSurrounder.java /testIf test case/ </li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.7: (community version, TiVo WIP)</p> 
   <ul> 
    <li>Repaired resolving references to classes and variables.</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.6: (community version, TiVo WIP)</p> 
   <ul> 
    <li>Further optimized load time for large projects.</li> 
    <li>Run haxelib-&gt;Project/SDK/Module library dependency synchronization in the background. </li> 
    <li>HXML completion: add parameters for compiler argument to presentable text of completion item </li> 
    <li>Completion from Haxe compiler: parse function parameters and return type to generate completion item with parameters and return type </li> 
    <li>Completion from Haxe compiler: format data from compiler replace &quot;&lt;&quot; to &quot;&lt;&quot; and &quot;&gt;&quot; to &quot;&gt;&quot; </li> 
    <li>HaxeReferenceImpl.java getVariants(completion): Handle case when &quot;var d:Array = []; d.|&quot; when d is not resolved </li> 
    <li>Add description to completion recived from Haxe compiler: HaxeMetaTagsCompletionContributor.java HXMLDefineCompletionContributor.java HXMLCompilerArgumentsCompletionContributor.java </li> 
    <li>Preliminary Haxe compiler completion support (OpenFL only)</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.5: (community version, TiVo WIP)</p> 
   <ul> 
    <li>Decreased time to load large projects considerably. Note that project loading is still on the UI thread, so it may appear to lock up for a short period of time. For very large projects, 90 seconds is not out of the ordinary. </li> 
    <li>HXML completion: Provide available libraries list</li> 
    <li>HXML completion: show installed haxelibs(also installed libs removed from available haxelibs list)</li> 
    <li>Fix meta tag parsing issues</li> 
    <li>HaxeMetaTagsCompletionContributor provides completion for meta tags</li> 
    <li>Project Xml(NME, OpenFL project project) completion: show available and installed haxelibs</li> 
    <li>SplitIntoDeclarationAndAssignment intention action</li> 
   </ul> </li> 
  <li> <p>0.8.1.1.TiVo.ClassHierarchy.4: (community version, TiVo WIP)</p> 
   <ul> 
    <li>Merged with version 0.8.1.1.TiVo.2 from the TiVo/master branch.</li> 
    <li>Class Hierarchy partial implementation.</li> 
    <li>SuperTypes work. Sub-types work within the same module.</li> 
    <li>All recent changes from github.com/Jetbrains/intellij-haxe/master</li> 
    <li>Support typedef optional parameters</li> 
    <li>Support optional function types</li> 
    <li>Eat compile-time conditional statements only (prevent eating conditional body as it was before)</li> 
    <li>Fix multiple metas issue on class</li> 
    <li>Highlight compile-time conditional statements if they don't have matching closing statements</li> 
    <li>Remove &quot;from&quot; and &quot;to&quot; from keywords, instead highlight them only if they used in abstract declaration</li> 
    <li>Prevent suggesting imports for using statements</li> 
    <li>Resolve references that have full path to type/field</li> 
    <li>Support function types, anonymous types as abstract type</li> 
    <li>Automatically add and remove dependencies when project gets opened</li> 
    <li>Remove &quot;&gt;=&quot; and &quot;&gt;&gt;=&quot; tokens from lexer, instead parse ('&gt;' '=') to avoid issues(https://github.com/TiVo/intellij-haxe/issues/42)</li> 
    <li>Support &quot;inline&quot; declaration attribute on local functions</li> 
    <li>Suggest to import class on code paste</li> 
    <li>Support macro expressions(including ECheckType)</li> 
    <li>Lots more... TODO: Get a complete list of updates.</li> 
   </ul> </li> 
 </ul> 
</ul> 
<p>0.8.1.1.TiVo.2: (TiVo version)</p> 
<ul> 
 <li>openFL path can now be retrieved from an .iml file</li> 
</ul> 
<p>0.8.1.1: (community version)</p> 
<ul> 
 <li>&quot;Find usages in project&quot; fixed.</li> 
 <li>Allowed @:final on methods and fields.</li> 
 <li>Re-implemented hxcpp debugger support to work with Haxe v3 built-in debugger</li> 
</ul> 
<p>0.8.1: (community version)</p> 
<ul> 
 <li>Remove com.intellij.modules.java from dependencies list to make plugin work in PHPStorm(and other IntelliJ IDEA platform-based IDEs)</li> 
</ul> 
<p>0.8: (community version)</p> 
<ul> 
 <li>Migration to new IntelliJ IDEA 13.1 API</li> 
 <li>HXML syntax highlighting</li> 
 <li>HXML completion</li> 
 <li>Parser support for different types of imports</li> 
 <li>Parser support for @:jsRequire and more parser fixes</li> 
</ul> 
<p>0.7.2: (community version)</p> 
<ul> 
 <li>New version number</li> 
 <li>basic hxml support</li> 
 <li>@:jsRequire meta support</li> 
 <li>Haxe grammar: @:jsRequire and macro support</li> 
 <li>templates naming fix (&quot;create new class/enum/interface&quot; issue)</li> 
 <li>new/get/set/never keywords, get/set identifiers are valid, jar build</li> 
</ul> 
<p>0.7.1:</p> 
<ul> 
 <li>Bug fixes for 13.1.1</li> 
</ul> 
<p>0.7:</p> 
<ul> 
 <li>Bug fixes</li> 
</ul> 
<p>0.6.9:</p> 
<ul> 
 <li>Neko target for OpenFL</li> 
 <li>Bug fixes</li> 
</ul> 
<p>0.6.5:</p> 
<ul> 
 <li>OpenFL support</li> 
</ul> 
<p>0.6.4:</p> 
<ul> 
 <li>Optimize imports</li> 
</ul> 
<p>0.6.3:</p> 
<ul> 
 <li>Parser improvements</li> 
</ul> 
<p>0.6.2:</p> 
<ul> 
 <li>Bug fixes</li> 
</ul> 
<p>0.6.1:</p> 
<ul> 
 <li>Haxe 3 support</li> 
</ul> 
<p>0.6:</p> 
<ul> 
 <li>Folding</li> 
</ul> 
<p>0.5.8:</p> 
<ul> 
 <li>Bug fixes</li> 
</ul> 
<p>0.5.6:</p> 
<ul> 
 <li>NME support improvements</li> 
 <li>HXCPP debugger improvements</li> 
</ul> 
<p>0.5.5:</p> 
<ul> 
 <li>Bug fixes</li> 
</ul> 
<p>0.5.4:</p> 
<ul> 
 <li>New Compiler Mode</li> 
</ul> 
<p>0.5.2:</p> 
<ul> 
 <li>Bug fixes</li> 
</ul> 
<p>0.5.1:</p> 
<ul> 
 <li>Bug fixes</li> 
</ul> 
<p>0.5:</p> 
<ul> 
 <li>HXCPP Debugging</li> 
 <li>Bug fixes</li> 
</ul> 
<p>0.4.7:</p> 
<ul> 
 <li>Introduce Variable Refactoring</li> 
 <li>Using Completion</li> 
 <li>Bug fixes</li> 
</ul> 
<p>0.4.6:</p> 
<ul> 
 <li>Conditional Compilation Support</li> 
 <li>Bug fixes</li> 
</ul> 
<p>0.4.5:</p> 
<ul> 
 <li>Live Templates</li> 
 <li>Surround With Action</li> 
 <li>Smart completion</li> 
 <li>Goto Test Action</li> 
</ul> 
<p>0.4.4:</p> 
<ul> 
 <li>Bug fixes</li> 
 <li>EReg support</li> 
</ul> 
<p>0.4.3:</p> 
<ul> 
 <li>Bug fixes</li> 
 <li>Structure view</li> 
</ul> 
<p>0.4.1:</p> 
<ul> 
 <li>Bug fixes</li> 
 <li>Unresolved type inspection</li> 
</ul> 
<p>0.4:</p> 
<ul> 
 <li>NME Support</li> 
 <li>Override/Implement method action</li> 
 <li>Generate getter/setter action</li> 
 <li>Parameter info action</li> 
</ul> 
<p>0.3:</p> 
<ul> 
 <li>Type resolving improvements</li> 
 <li>Goto Implementation(s) action</li> 
 <li>Goto Super Method action</li> 
 <li>Move refactoring</li> 
</ul> 
<p>0.2.3:</p> 
<ul> 
 <li>Completion fixes</li> 
</ul> 
<p>0.2.2:</p> 
<ul> 
 <li>Type resolving improvements</li> 
 <li>Rename refactoring</li> 
 <li>NMML scheme</li> 
 <li>HXML support</li> 
</ul> 
<p>0.2.1:</p> 
<ul> 
 <li>Type resolving improvements</li> 
 <li>Documentation support</li> 
 <li>New color settings</li> 
</ul> 
<p>0.2:</p> 
<ul> 
 <li>Jump to declaration of local, std symbol or class</li> 
 <li>Reference completion</li> 
 <li>Class completion</li> 
 <li>Color settings</li> 
 <li>Code formatter</li> 
 <li>Go to Class</li> 
 <li>Icons for Haxe files</li> 
 <li>Search for usages</li> 
 <li>Highlight symbol occurencies</li> 
 <li>Debugger for Flash target (&quot;Flash/Flex Support&quot; plugin required)</li> 
</ul> 
<p>0.1:</p> 
<ul> 
 <li>Haxe module and SDK</li> 
 <li>Parsing Haxe files</li> 
 <li>Keyword completion</li> 
 <li>Compile Haxe files and run in Neko VM</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>4.3</rating></idea-plugin><idea-plugin downloads='220272' size='273655' date='1415897970000' url='https://github.com/dmarcotte/idea-handlebars'><name>Handlebars/Mustache</name><id>com.dmarcotte.handlebars</id><description><![CDATA[<a href="http://handlebarsjs.com/" rel="nofollow">Handlebars</a> and 
<a href="http://mustache.github.com/" rel="nofollow">Mustache</a> template support]]></description><version>139.70</version><vendor email='' url='https://github.com/dmarcotte'>dmarcotte / JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='139.69' until-build='139.2147483647'/><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.lang</depends><rating>4.6</rating></idea-plugin><idea-plugin downloads='32386' size='70697' date='1362597156000' url=''><name>TYPO3 TypoScript Support</name><id>com.jetbrains.typoscript</id><description><![CDATA[Typo3 language TypoScript support]]></description><version>0.1.1</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='126.319' /><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.lang</depends><rating>4.1</rating></idea-plugin><idea-plugin downloads='68401' size='46040' date='1427900188000' url=''><name>Ini4Idea</name><id>com.jetbrains.plugins.ini4idea</id><description><![CDATA[Provides &quot;.ini&quot; files support.]]></description><version>138.826</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='138.0' until-build='142.381'/><change-notes><![CDATA[PhpStorm EAP 138.826 verion]]></change-notes><depends>com.intellij.modules.lang</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='11080' size='242031' date='1431008124000' url=''><name>GLSL Support</name><id>GLSL</id><description><![CDATA[Support for the OpenGL Shading Language]]></description><version>1.7.1</version><vendor email='' url=''>Foundation</vendor><idea-version min="n/a" max="n/a" since-build='139.1117' /><change-notes><![CDATA[Recommended if you have 1.7]]></change-notes><depends>com.intellij.modules.lang</depends><rating>3.3</rating></idea-plugin><idea-plugin downloads='6178' size='62600' date='1367583013000' url=''><name>NEON support</name><id>NEON support</id><description><![CDATA[Nette Object Notation - ne-on.org]]></description><version>0.2</version><vendor email='' url=''>juzna.cz</vendor><idea-version min="n/a" max="n/a" since-build='111.0' /><change-notes><![CDATA[finally it seems to work now]]></change-notes><depends>com.intellij.modules.lang</depends><depends>com.jetbrains.php</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='76528' size='1363049' date='1427146837000' url='http://ignatov.github.com/intellij-erlang'><name>Erlang</name><id>org.jetbrains.erlang</id><description><![CDATA[Erlang plugin]]></description><version>0.5.11.139</version><vendor email='ignatovs@gmail.com' url=''>Sergey Ignatov</vendor><idea-version min="n/a" max="n/a" since-build='139.222' until-build='139.2147483647'/><change-notes><![CDATA[<p>0.5.11</p> 
<ul> 
 <li>New inspection: multiple function exports</li> 
 <li>Fixed false-positive error highlighting (<a href="https://github.com/ignatov/intellij-erlang/issues/499" rel="nofollow">#499</a>, <a href="https://github.com/ignatov/intellij-erlang/issues/505" rel="nofollow">#505</a>)</li> 
 <li>Reworked Erlang/OTP version detection (<a href="https://github.com/ignatov/intellij-erlang/issues/514" rel="nofollow">#514</a>)</li> 
 <li>Improved &quot;Export Function&quot; intention action (<a href="https://github.com/ignatov/intellij-erlang/issues/440" rel="nofollow">#440</a>)</li> 
 <li>Improved debugger (<a href="https://github.com/ignatov/intellij-erlang/issues/501" rel="nofollow">#501</a>, <a href="https://github.com/ignatov/intellij-erlang/issues/546" rel="nofollow">#546</a>)</li> 
 <li>New completion variant: e.g. ```ilfo``` completes to ```io_lib:format()```</li> 
 <li>Improved specification resolution</li> 
 <li>Setup Project SDK notification for small IDEs (<a href="https://github.com/ignatov/intellij-erlang/issues/569" rel="nofollow">#569</a>) </li>
 <li>Bugfixes</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='90816' size='140348' date='1418990358000' url=''><name>Jade</name><id>com.jetbrains.plugins.jade</id><description><![CDATA[Support for 
<a href="http://jade-lang.com/" rel="nofollow">Jade</a>, a template language for JavaScript]]></description><version>140.1212</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='139.659' /><change-notes><![CDATA[]]></change-notes><depends>com.intellij.css</depends><depends>com.intellij.modules.xml</depends><depends>JavaScript</depends><rating>4.1</rating></idea-plugin><idea-plugin downloads='2159' size='62763' date='1424596048000' url=''><name>Org4Idea</name><id>Org4Idea</id><description><![CDATA[An OrgMode editor for IntelliJ IDEA]]></description><version>0.2.0</version><vendor email='skuro@skuro.tk' url='http://skuro.tk'>Carlo Sciolla</vendor><idea-version min="n/a" max="n/a" since-build='107.105' /><change-notes><![CDATA[Added many new features, including: spellcheck support, live templates, keyword / block highlight, commenter]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='6314' size='39041' date='1427257377000' url=''><name>JSFL Support</name><id>JSFL Support</id><description><![CDATA[Support of JSFL, the scripting language for automating Adobe Flash.]]></description><version>3.1.2</version><vendor email='' url=''>Evgeniy Polyakov</vendor><idea-version min="n/a" max="n/a" since-build='133.193' until-build='141.2147483647'/><change-notes><![CDATA[<p>3.1.2</p> Compatible with IntelliJ IDEA 14.1. 
<p>3.1.1</p> Reworked annotations in JSFL API: 
<ul> 
 <li>Added braces in @type and @return annotations.</li> 
 <li>Added missing array element types.</li> 
 <li>Added ElementFindAndSelect type.</li> 
 <li>Added @class and @extends annotations.</li> 
 <li>Changed {String} to {*} in trace methods.</li> 
 <li>Added annotations for duck-typing objects like points, rectangles etc.</li> 
 <li>Added annotations for alternative argument type, mostly for color values {String|Number}.</li> 
 <li>Various fixes in API description.</li> 
</ul> 
<p>3.1.0</p> 
<ul> 
 <li>Language dialect of *.jsfl files has been set to JavaScript 1.8 since Flash environment supports it starting Flash CC. For the complete list of new language features see https://developer.mozilla.org/en-US/docs/Web/JavaScript/New_in_JavaScript/1.8.</li> 
 <li>Added link to external documentation for most of API elements. The documentation is available via Shift+F1 or Quick Documentation Lookup. For more details see https://www.jetbrains.com/idea/help/viewing-external-documentation.html.</li> 
 <li>Reworked description of JSFL API. All methods and fields are now defined in the prototype that allows to display more info in code completion and hints. Cache invalidation might be required to get updated JSFL libraries!</li> 
 <li>Fixed description of some API elements (SpriteSheetExporter, SymbolInstance.useBackgroundColor, FontItem, etc)</li> 
 <li>Added element type of all arrays.</li> 
</ul> 
<p>3.0.2</p> Compatible with IntelliJ IDEA 14. 
<p>3.0.1</p> Compatible with IntelliJ IDEA 13.1. 
<p>3.0.0</p> Compatible with IntelliJ IDEA 13. JSFL library has been updated for Flash CC http://help.adobe.com/en_US/flash/cs/extend/WS5b3ccc516d4fbf351e63e3d118a9024f3f-7fe7CS5.html 
<p>2.1.1</p> Compatible with IntelliJ IDEA 12.1.6. 
<p>2.1.0</p> Compatible with IntelliJ IDEA 12.1. 
<p>2.0.2</p> Language dialect of *.jsfl files is set to JavaScript 1.6 because Flash environment uses this version of the language. Earlier language dialect depended on JavaScript settings. Now it is strictly defined. For more information see https://developer.mozilla.org/en-US/docs/JavaScript/New_in_JavaScript/1.6. 
<p>2.0.1</p> Decreased JDK version. Now the plugin can be run on 1.6 JDK. 
<p>2.0.0</p> Compatible with IntelliJ IDEA 12. 
<p>1.1.1</p> Changed icons. Now they are more compatible with IntelliJ IDEA design. 
<p>1.1</p> JSFL library has been verified according to an official documentation http://help.adobe.com/en_US/flash/cs/extend/index.html 
<ul> 
 <li>Added Flash CS5, CS5.5, CS6 API</li> 
 <li>Added version information of each of API elements</li> 
 <li>Removed API elements that are not available since Flash CS5: Screen, ScreenOutline, document versioning</li> 
 <li>Added marking of optional method parameters</li> 
 <li>Added marking of read-only properties</li> 
</ul> 
<p>1.0</p> 
<ul> 
 <li>JSFL files based on JavaScript files</li> 
 <li>Core library for Flash CS5 and earlier versions</li> 
 <li>Running JSFL files in associated application</li> 
 <li>Templates for JSFL commands and tools</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><depends>JavaScript</depends><rating>00</rating></idea-plugin><idea-plugin downloads='1456' size='38702' date='1355751868000' url=''><name>JaggeryEditor</name><id>JaggeryEditorSupport</id><description><![CDATA[IDE support for Jaggery. Syntax highlighting, code completion and code formatting are enabled
<br />]]></description><version>2.0</version><vendor email='' url='http://jaggeryjs.org/'>WSO2</vendor><idea-version min="n/a" max="n/a" since-build='123.72' /><change-notes><![CDATA[Code formatting for javascript part. 
<br /> variables visible among blocks of tags]]></change-notes><depends>JavaScript</depends><rating>00</rating></idea-plugin><idea-plugin downloads='10050' size='49733' date='1385994104000' url=''><name>GNU GetText files support (*.po)</name><id>org.jetbrains.plugins.localization</id><description><![CDATA[This plugin enables support for GNU GetText files (*.po)]]></description><version>134.SNAPSHOT</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='130.1' /><change-notes><![CDATA[<ul> 
 <li>Added spell-checking support (PY-11477)</li> 
 <li>Fixed select word behavior (PY-7533)</li> 
 <li>Added *.pot extension as default (PY-11161)</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='17891' size='139940' date='1385997930000' url=''><name>ReStructuredText Support</name><id>org.jetbrains.plugins.rest</id><description><![CDATA[This plugin enables support for reStructuredText files (*.rst)]]></description><version>134.SNAPSHOT</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='130.1' /><change-notes><![CDATA[<ul> 
 <li>Added inspection for title &amp; underline length math (PY-10998)</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>4.5</rating></idea-plugin><idea-plugin downloads='14953' size='108334' date='1412928524000' url=''><name>Slim</name><id>org.jetbrains.plugins.slim</id><description><![CDATA[Slim language support]]></description><version>7.0.0.20141010</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='139.1' until-build='139.2147483647'/><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.lang</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='60400' size='421681' date='1412928616000' url=''><name>Puppet Support</name><id>com.intellij.lang.puppet</id><description><![CDATA[This plugin provides Puppet language support. Current features include: 
<ul> 
 <li> Syntax highlighting and auto-formatting for puppet manifests written using either Puppet 3.x or Puppet 4 (future) language syntax; </li>
 <li> Code assistance (completion, find usages, quick definition, etc.) for variables, classes, resource types and parameters, facts and external functions and types; </li>
 <li> Unresolved symbols error highlighting; </li>
 <li> Ability to set up several environments to use different <code>modulepath</code> for resolving symbols defined in modules and a mechanism to synchronize selected environment with the current git branch automatically. </li>
</ul>]]></description><version>7.0.0.20141010</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='139.1' until-build='139.2147483647'/><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.lang</depends><rating>2.8</rating></idea-plugin><idea-plugin downloads='833' size='164686' date='1364644578000' url='https://github.com/Ladicek/IntelliFrog'><name>IntelliFrog</name><id>cz.ladicek.intellifrog</id><description><![CDATA[SmartFrog Plugin for IntelliJ IDEA]]></description><version>0.4</version><vendor email='ladicek@gmail.com' url='http://ladicek.github.com/'>Ladislav Thon</vendor><idea-version min="n/a" max="n/a" since-build='123.72' /><change-notes><![CDATA[<p>0.4</p> 
<ul> 
 <li>code navigation</li> 
 <li>code completion</li> 
 <li>find usages</li> 
 <li>rename refactoring</li> 
 <li>safe delete</li> 
</ul> 
<p>0.3</p> 
<ul> 
 <li>two small parsing issue fixes</li> 
 <li>navigate to Java class from arbitrary string</li> 
 <li>navigate to SmartFrog script from #include</li> 
 <li>completion of SmartFrog scripts inside #include</li> 
</ul> 
<p>0.2</p> 
<ul> 
 <li>small parsing issue fix</li> 
 <li>structure view</li> 
 <li>highlighting known attributes</li> 
 <li>navigate to component class</li> 
</ul> 
<p>0.1</p> 
<ul> 
 <li>SmartFrog parsing with reasonable error recovery</li> 
 <li>syntax highlighting</li> 
 <li>brace matching</li> 
 <li>commenting</li> 
 <li>creating new .sf files</li> 
 <li>keyword completion</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='11800' size='170787' date='1412104008000' url='https://github.com/raket/idea-silverstripe'><name>SilverStripe Template Language Support</name><id>com.raket.silverstripe</id><description><![CDATA[<a href="http://www.silverstripe.org/" rel="nofollow">SilverStripe</a> template language support
<br /> 
<br /> Issues, feature requests and contributions welcome: 
<a href="https://github.com/raket/idea-silverstripe" rel="nofollow">https://github.com/raket/idea-silverstripe</a>]]></description><version>0.9.1.1</version><vendor email='marcus@raket.nu' url='https://github.com/raket/idea-silverstripe'>Raket
        Webbyr√•</vendor><idea-version min="n/a" max="n/a" since-build='129.196' /><change-notes><![CDATA[<strong>Version 0.9.1.1</strong> 
<ul> 
 <li><b>Bugfixes</b></li> 
 <li>Fix null pointer in class search</li> 
 <li>Set never changed in cache provider</li> 
 <li>Tested with PHPStorm 7.1.4 and 8.0.1</li> 
</ul> 
<strong>Version 0.9.1</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Fixed concurrency issues in variable resolves</li> 
 <li>Exclude test classes from resolves</li> 
 <li>Create live template context for SilverStripe templates</li> 
 <li>Bundled live templates for all the common tags</li> 
</ul> 
<strong>Version 0.9</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>PHPStorm 6.0.1+ only</li> 
 <li>Total parser rewrite</li> 
 <li>Theme dir and theme file resolves</li> 
 <li>Fix bug in translation identifiers</li> 
 <li>Expanded variable resolves. Ctrl+clicking variables now also checks the db, has_one, has_many, many_many and belongs_many_many arrays.</li> 
</ul> 
<strong>Version 0.8.1</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Surround descriptors. By pressing ctrl+alt+t you can surround selected text with either an if, loop or with statement.</li> 
</ul> 
<strong>Version 0.8</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Variables are named elements</li> 
 <li>Variable resolves. Ctrl+click will now try to resolve to a method with that name or a method prefixed by get.</li> 
</ul> 
<strong>Version 0.7.2</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Project component for tracking SilverStripe version</li> 
 <li>Readded refactor to include insertion of include tag</li> 
</ul> 
<strong>Version 0.7.1</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Underscores are now valid in variable names.</li> 
 <li>References added to require tag. The file names are now ctrl+clickable leading to the file in question. themedCSS is currently NOT theme aware and will suggest all matches.</li> 
</ul> 
<strong>Version 0.7</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Annotates free strings to allow easy conversion to strings or variables.</li> 
 <li>Added &lt;, &lt;=, &gt;, &gt;= comparison operators with a warning if they are used in SilverStripe versions lower than 3.1.</li> 
 <li>Added require tag.</li> 
 <li>Fixed fatal error in include refactor when a project is opened without an open file.</li> 
 <li>Change highlighting colors to align more with PHP.</li> 
</ul> 
<strong>Version 0.6.1</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Fixes reformat bug after removing text when refactoring to include file.</li> 
 <li>Correctly parses advanced versions of loop, with and control.</li> 
 <li>&quot;&lt;&quot; is no longer interpreted as a bad character.</li> 
 <li>Typing &quot;{&quot; should now consistently yield &quot;{$}&quot;.</li> 
</ul> 
<strong>Version 0.6</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Refactor selected text to include file. This command moves the selected text to an include file. Defaults to ctrl+F6.</li> 
 <li>Fix parser bug for else_if statements.</li> 
</ul> 
<strong>Version 0.5.1</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Major bugfix that would freeze the lexer in some cases.</li> 
 <li>Add YAML references for translations. It is now possible to ctrl+click an element in a yaml translation file to find the corresponding tag.</li> 
 <li>Gutter icon removed for include files.</li> 
</ul> 
<strong>Version 0.5</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Added the cached tag</li> 
 <li>Proper parsing of translation tags</li> 
 <li>Custom error messages for translation tag</li> 
 <li>Parse advanced include statments</li> 
 <li>Proper parsing of var statements</li> 
 <li>Basic spellchecking</li> 
 <li>Auto focus for autocomplete</li> 
 <li>Bug fix in formatter</li> 
</ul> 
<strong>Version 0.4</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Proper file resolution for include statements. It's now possible to ctrl+click or command+click include statements directly to navigate to the correct file. We're keeping the icon in the gutter for clarity</li> 
 <li>Bugfix for autocomplete of block statements. This both fixes a bug that missed the autocomplete and caused an exception when searching for files in some cases</li> 
</ul> 
<strong>Version 0.3</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Code completion for include statement. It will show a list of possible include files in the current project</li> 
 <li>Annotation and quickfix of missing include files. A missing file will be annotated and can be quickfixed to automatically create the file</li> 
 <li>Goto include file. Correct include statement shows a marker in the gutter that when clicked leads to the file</li> 
 <li>Comments support. The plugin now supports the Code -&gt; Comment shortcuts and will create an SS shortcut around the selected text</li> 
</ul> 
<strong>Version 0.2</strong> 
<ul> 
 <li><b>Features</b></li> 
 <li>Code completion for block statements Writing out the opening statement will autocomplete the closing statement</li> 
 <li>Automatic placing of caret when pressing enter between start and close block</li> 
 <li>Code formatting for both HTML and the SilverStripe template language.</li> 
 <li>Proper parsing of if/else_if statements</li> 
 <li>Basic support of &lt;%t %&gt;</li> 
</ul> 
<strong>Version 0.1</strong> 
<br /> First version of the plugin. It brings basic tag recognition, syntax highlighting, brace matching and code folding. It also recognizes HTML as a separate language and allows the formatting of HTML inside an ss file. 
<ul> 
 <li><b>Features</b></li> 
 <li>Basic tag recognition. Recognizes the following tags: 
  <ul> 
   <li>&lt;% if $Var %&gt; - &lt;% else_if %&gt; - &lt;% else %&gt; - &lt;% end_if %&gt;</li> 
   <li>&lt;% loop $Var %&gt; - &lt;% end_loop %&gt;</li> 
   <li>&lt;% with $Var %&gt; - &lt;% end_with %&gt;</li> 
   <li>&lt;% control $Var %&gt; - &lt;% end_control %&gt;</li> 
   <li>&lt;%-- Comment --%&gt;</li> 
   <li>&lt;% include File %&gt;</li> 
   <li>&lt;% base_tag %&gt;</li> 
   <li>Var statements, both {$Var} and $Var is supported.</li> 
  </ul> </li> 
 <li>Basic syntax highlighting</li> 
 <li>Brace matching</li> 
 <li>Code folding</li> 
 <li>HTML is recognized and can be formatted.</li> 
 <li>Error messages for mismatching blocks and unexpected blocks.<br /> Error messages for syntax errors in Var statements. </li> 
 <li>Message about unrecognized tags.</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><depends>com.intellij.modules.platform</depends><depends>com.jetbrains.php</depends><depends>org.jetbrains.plugins.yaml</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='14072' size='298366' date='1426898362000' url=''><name>Pig</name><id>org.apache.pig.plugin.idea</id><description><![CDATA[Apache Pig Language Plugin]]></description><version>1.7</version><vendor email='brandon.kearby at gmail com' url=''>Brandon Kearby &amp; Russell Melick</vendor><idea-version min="n/a" max="n/a" since-build='107.105' /><change-notes><![CDATA[IntelliJ - Pig Plugin 
<p> Pig Plugin adds <a href="http://pig.apache.org" rel="nofollow">Apache Pig</a> Language support to <a href="http://www.jetbrains.com/idea" rel="nofollow">IntelliJ</a> Note: you may already have .pig files associated with the text editor. Go to IDE Settings -&gt; File Types to assign them to the pig plugin if nothing happens after you install it. </p> Features 
<ul> 
 <li>Find Usages and refactoring support for UDFs and pig variables</li> 
 <li>Data Type Auto-completion on schema</li> 
 <li>Keyword highlighting</li> 
 <li>Code commenting/uncommenting</li> 
 <li>Brace matching</li> 
 <li>Syntax and errors highlighting</li> 
 <li>Comment folding</li> 
 <li>Doc Style Comments</li> 
 <li>Custom Color Settings Page</li> 
</ul> Change log Version 1.7 
<ul> 
 <li>Find Usages and refactoring support for UDFs and pig variables</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='44165' size='117033' date='1408647422000' url='https://github.com/yifanz/Intellij-Dust'><name>Dust</name><id>com.linkedin.intellij.dust</id><description><![CDATA[<a href="http://linkedin.github.com/dustjs/" rel="nofollow">Dust</a> Template Support 
<br /> 
<br /> Issues, feature requests, source code: 
<a href="https://github.com/yifanz/Intellij-Dust" rel="nofollow">https://github.com/yifanz/Intellij-Dust</a>]]></description><version>0.3.8</version><vendor email='' url='https://github.com/yifanz'>Yi-Fan Zhang</vendor><idea-version min="n/a" max="n/a" since-build='110.0' /><change-notes><![CDATA[<b>Version 0.3.8</b> 
<ul> 
 <li> Allow hyphen inside of identifiers </li> 
</ul> 
<b>Version 0.3.7</b> 
<ul> 
 <li> Use system dependent file separator when resolving partials </li> 
 <li> Fixed parsing errors with single period path expressions </li> 
 <li> Allow multiple colon tags </li> 
</ul> 
<b>Version 0.3.6</b> 
<ul> 
 <li> Allow path expression inside subscript </li> 
 <li> Fix bugs in subscript tokenizer rule </li> 
</ul> 
<b>Version 0.3.5</b> 
<ul> 
 <li> Allow self-closing section tags in grammar </li> 
</ul> 
<b>Version 0.3.4</b> 
<ul> 
 <li> Fixed bug with parsing numeric key tag </li> 
</ul> 
<b>Version 0.3.3</b> 
<ul> 
 <li> Fixed bug with using current context and numbers as attribute values </li> 
</ul> 
<b>Version 0.3.2</b> 
<ul> 
 <li> Fixed bug in comment parsing </li> 
</ul> 
<b>Version 0.3.1</b> 
<ul> 
 <li> Fixed compatibility issues with Intellij 11 and set it as the minimum supported version </li> 
 <li> Fixed bugs in left curly brace and identifier token patterns in lexer </li> 
</ul> 
<b>Version 0.3</b> 
<ul> 
 <li> Added closing tag auto-completion </li> 
 <li> Added dust partial tag goto reference shortcut &quot;Ctrl+b&quot; </li> 
 <li> Fix parsing error on self closing block tags </li> 
 <li> Fix brace matcher bug when key tags are used in attribute strings </li> 
 <li> Remove redundant HTML pattern rules in Dust lexer </li> 
</ul> 
<b>Version 0.2</b> 
<ul> 
 <li> Added Dust brace match highlighting </li> 
 <li> Added &quot;Ctrl+/&quot; shortcut for Dust comments </li> 
 <li> Fix syntax highlighting for subscript operator in tags (e.g. {#section[0]}...{/section[0]}) </li> 
 <li> Added TODO highlighting in comments </li> 
</ul> 
<b>Version 0.1.2</b> 
<ul> 
 <li> Fix syntax highlighting when javascript is present in template </li> 
</ul> 
<b>Version 0.1.1</b> 
<ul> 
 <li> Enable plugin for all JetBrain products </li> 
</ul> 
<b>Version 0.1</b> 
<ul> 
 <li> Provides syntax highlighting for Dust templates </li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='2279' size='18643' date='1367528457000' url=''><name>Nette framework helpers</name><id>Nette framework helpers</id><description><![CDATA[Nette development with pleasure]]></description><version>0.1</version><vendor email='' url=''>juzna.cz</vendor><idea-version min="n/a" max="n/a" since-build='129.1' /><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.lang</depends><depends>com.jetbrains.php</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='8854' size='4045077' date='1421196629000' url='http://mathematicaplugin.halirutan.de'><name>Mathematica Support</name><id>de.halirutan.mathematica</id><description><![CDATA[Mathematica support for IntelliJIDEA. Includes syntax highlighting, function completion, documentation lookup, refactoring, code formatting, etc. This plugin is currently under heavy development. If you want to help, check out the 
<a href="http://mathematicaplugin.halirutan.de" rel="nofollow">Official Website</a> for more information or take a look at the open-source 
<a href="https://github.com/halirutan/Mathematica-IntelliJ-Plugin" rel="nofollow">GitHub repository</a>.]]></description><version>0.3.4</version><vendor email='pscheibe@trm.uni-leipzig.de' url='http://mathematicaplugin.halirutan.de'>Patrick Scheibe</vendor><idea-version min="n/a" max="n/a" since-build='135.1230' /><change-notes><![CDATA[With this release the support for Wolfram Language version 10 should be complete. Now, all new syntax as well as autocompletion and documentation lookup will work for all newly introduced functions.]]></change-notes><depends>com.intellij.modules.lang</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='20826' size='8104673' date='1410283596000' url='http://ligasgr.github.io/intellij-xquery/'><name>XQuery Support</name><id>org.intellij.xquery</id><description><![CDATA[Provides support for XQuery language in version 3.0]]></description><version>2.2.0</version><vendor email='ligasgr@gmail.com' url='http://grzegorzligas.blogspot.com/'>Grzegorz Ligas</vendor><idea-version min="n/a" max="n/a" since-build='132.947' until-build='139.2147483647'/><change-notes><![CDATA[<p>2.2.0:</p> 
<ul> 
 <li>Improve insertion of completed items with namespace prefix.</li> 
 <li>Improve completion of functions and variables when prefix and part of the name are present.</li> 
 <li>Issue <a href="https://github.com/ligasgr/intellij-xquery/issues/110" rel="nofollow">#110</a> - Add backwards compatibility with Marklogic language extensions.</li> 
 <li>Issue <a href="https://github.com/ligasgr/intellij-xquery/issues/111" rel="nofollow">#111</a> - Color Issues.</li> 
 <li>Issue <a href="https://github.com/ligasgr/intellij-xquery/issues/112" rel="nofollow">#112</a> - Faulty error reported using ml-1.0 syntax.</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='2173' size='302986' date='1373819086000' url=''><name>LiveScriptIdea</name><id>org.livescriptidea</id><description><![CDATA[Plugin for LiveScript language support]]></description><version>0.1.7</version><vendor email='racklin@gmail.com' url='https://github.com/racklin/livescript-idea'>Rack Lin</vendor><idea-version min="n/a" max="n/a" since-build='80.9000' /><change-notes><![CDATA[0.1.7 changes: 
<ul> 
 <li>[feature]Add LiveScript File Watcher To Compile LiveScript File To JavaScirpt.</li> 
</ul> 0.1.6 changes: 
<ul> 
 <li>[feature]Add Preview Compiled LiveScript File</li> 
</ul> 0.1.5 changes: 
<ul> 
 <li>[feature]Add &lt;&lt;&lt; &lt;&lt;&lt;&lt; import super let export var from keywords</li> 
 <li>[feature]Add backticks ` support</li> 
</ul> 0.1.4 changes: 
<ul> 
 <li>[feature]Add CodeStyle with a Code Style settings preference pane</li> 
</ul> 0.1.3 changes: 
<ul> 
 <li>[feature]LiveScript File / Class Templates</li> 
 <li>[bugfix]Fixes some lexer statements</li>
 <li> </li>
</ul>]]></change-notes><depends>com.intellij.modules.ultimate</depends><depends>JavaScript</depends><rating>00</rating></idea-plugin><idea-plugin downloads='579' size='1536682' date='1416095378000' url=''><name>Textmapper</name><id>org.textmapper.idea</id><description><![CDATA[Textmapper support for IntelliJ 12.1+ 
<br /> 
<b>Features:</b>
<br /> 
<ul> 
 <li>Customizable syntax highlighting</li> 
 <li>Navigation (go to declaration)</li> 
 <li>Find usages, Rename, File structure</li> 
 <li>On-the-fly validation, compiler</li> 
</ul>]]></description><version>0.9.4</version><vendor email='egryaznov@gmail.com' url='http://textmapper.org/'>Evgeny Gryaznov</vendor><idea-version min="n/a" max="n/a" since-build='129.713' /><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.lang</depends><depends>com.intellij.modules.platform</depends><rating>00</rating></idea-plugin><idea-plugin downloads='29664' size='52822' date='1390986342000' url=''><name>EJS</name><id>com.jetbrains.lang.ejs</id><description><![CDATA[<a href="http://embeddedjs.com/" rel="nofollow">EJS</a> support]]></description><version>133.745</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='133.620' /><change-notes><![CDATA[<ul> 
 <li>Initial support</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><depends>JavaScript</depends><rating>2.3</rating></idea-plugin><idea-plugin downloads='17832' size='62719' date='1413187854000' url=''><name>Twig Support</name><id>com.jetbrains.twig</id><description><![CDATA[Twig Template Language Support]]></description><version>139.58</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='139.1' /><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.ultimate</depends><rating>00</rating></idea-plugin><idea-plugin downloads='24123' size='89034' date='1412768855000' url=''><name>Stylus support</name><id>org.jetbrains.plugins.stylus</id><description><![CDATA[Stylus language support]]></description><version>139.2</version><vendor email='' url=''>JetBrains</vendor><idea-version min="n/a" max="n/a" since-build='139.2' until-build='140.0'/><change-notes><![CDATA[]]></change-notes><depends>com.intellij.modules.lang</depends><depends>com.intellij.css</depends><rating>4.0</rating></idea-plugin><idea-plugin downloads='638' size='803354' date='1384246147000' url=''><name>DeftIDEA</name><id>org.dylanfoundry.deft</id><description><![CDATA[<p>This plugin provides support for the <a href="http://opendylan.org/" rel="nofollow">Dylan</a> programming language.</p>]]></description><version>0.4.2</version><vendor email='' url='http://dylanfoundry.org/'>Dylan Foundry</vendor><idea-version min="n/a" max="n/a" since-build='129.239' /><change-notes><![CDATA[<p>0.4.2</p> 
<ul> 
 <li>Initial support for smart indenting as you type. This doesn't dedent yet.</li> 
 <li>Add live templates for define suite (defs) and define test (defte).</li> 
 <li>Fix another null pointer exception.</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='4467' size='66240' date='1402147517000' url='https://github.com/webschik/idea-doT'><name>doT</name><id>com.webschik.doT</id><description><![CDATA[Plugin for 
<a href="http://olado.github.io/doT/index.html" rel="nofollow">doT.js</a> templates support. 
<br /> 
<a href="https://www.liqpay.com/?do=clickNbuy&amp;button=i67533662223" rel="nofollow">Donate with LiqPay</a>]]></description><version>1.5.4</version><vendor email='' url='https://github.com/webschik'>webschik</vendor><idea-version min="n/a" max="n/a" since-build='107.105' /><change-notes><![CDATA[Add change notes here.
<br /> 
<small>most HTML tags may be used</small>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='10801' size='663304' date='1431387014000' url=''><name>Pascal IDEA Plugin</name><id>com.siberika.idea.pascal</id><description><![CDATA[Pascal support for IDEA.
<br />]]></description><version>0.92</version><vendor email='argb32@gmail.com' url='http://www.siberika.com/pasidea.htm'>siberika.com</vendor><idea-version min="n/a" max="n/a" since-build='133.0' /><change-notes><![CDATA[<p>0.92</p> 
<ul> 
 <li>file structure view</li> 
 <li>syntax highlighting in decompiled files</li> 
 <li>completion improve</li> 
 <li>new icons</li> 
</ul> 
<p>0.91</p> 
<ul> 
 <li>statements completion</li> 
 <li>support of nested type, variable and constant declarations</li> 
 <li>exception variables in except clause resolving</li> 
 <li>binary and octal numbers support (OBJFPC)</li> 
</ul> 
<p>0.9</p> 
<ul> 
 <li>initial Delphi RTL support</li> 
 <li>scoped unit names support</li> 
 <li>basic generics support</li> 
 <li>moved built-in identifiers source file</li> 
</ul> 
<p>0.87</p> 
<ul> 
 <li>major completion improvement</li> 
 <li>fixed variant record handling</li> 
 <li>added support of some keywords</li> 
 <li>support .pp extension for unit files</li> 
</ul> 
<p>0.86</p> 
<ul> 
 <li>WITH statement support while resolving</li> 
 <li>multiple parents support while resolving</li> 
</ul> 
<p>0.85</p> 
<ul> 
 <li>resolving of identifiers within complex expressions</li> 
 <li>routine parameters info display</li> 
 <li>fixed ppu decompilation issues under Windows</li> 
</ul> 
<p>0.83</p> 
<ul> 
 <li>expressions parser</li> 
 <li>formatting and indentation improve</li> 
</ul> 
<p>0.82</p> 
<ul> 
 <li>large files parsing performance improve</li> 
 <li>bug fixes</li> 
</ul> 
<p>0.81</p> 
<ul> 
 <li>unit name completion</li> 
 <li>module rename refactoring</li> 
 <li>module file templates</li> 
</ul> 
<p>0.8</p> 
<ul> 
 <li>full references/find usages</li> 
 <li>completion improvement</li> 
</ul> 
<p>0.7.5</p> 
<ul> 
 <li>code formatter</li> 
</ul> 
<p>0.7.1</p> 
<ul> 
 <li>regression fixes</li> 
</ul> 
<p>0.7</p> 
<ul> 
 <li>IDEA 14 support</li> 
 <li>improved completion</li> 
 <li>stable parser</li> 
 <li>standard FPC installation layouts support (including OSX)</li> 
</ul> 
<p>0.6</p> 
<ul> 
 <li>PPU viewer</li> 
</ul> 
<p>0.5</p> 
<ul> 
 <li>context-aware code completion</li> 
 <li>undeclared identifiers highlighting and quick fix</li> 
 <li>rename refactoring</li> 
 <li>find usages</li> 
 <li>navigation: class method definition &lt;=&gt; implementation</li> 
 <li>navigation: unit routine interface definition &lt;=&gt; implementation</li> 
 <li>Pascal syntax highlighting</li> 
 <li>program compilation with FPC and running</li> 
 <li>first public version</li> 
</ul>]]></change-notes><depends>com.intellij.modules.platform</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='690' size='60629' date='1399493810000' url=''><name>Conkitty</name><id>com.hoho.conkitty</id><description><![CDATA[Conkitty Template Engine Support]]></description><version>0.5.0</version><vendor email='dakota@brokenpipe.ru' url='https://github.com/hoho'>Marat Abdullin</vendor><idea-version min="n/a" max="n/a" since-build='107.105' /><change-notes><![CDATA[Conkitty 0.5.x support.]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='21772' size='1474196' date='1430065635000' url='https://github.com/shalupov/idea-cloudformation'><name>AWS CloudFormation support</name><id>AWSCloudFormation</id><description><![CDATA[Amazon AWS CloudFormation language support]]></description><version>0.3.20</version><vendor email='shalupov@diverse.org.ru' url='https://github.com/shalupov/idea-cloudformation'>Leonid Shalupov</vendor><idea-version min="n/a" max="n/a" since-build='139.661' until-build='141.2147483647'/><change-notes><![CDATA[Sync to CloudFormation docs]]></change-notes><depends>com.intellij.modules.lang</depends><rating>5.0</rating></idea-plugin><idea-plugin downloads='23129' size='169940' date='1424519353000' url=''><name>IntelliBot</name><id>com.millennialmedia.intellibot</id><description><![CDATA[IntelliBot, adding intelligence to Robot 
<p>The IntelliBot plugin for IntelliJ/Pycharm adds features to the <a href="http://robotframework.org/" rel="nofollow">Robot Framework</a>. This includes:</p> 
<ul> 
 <li>Syntax Highlighting</li> 
 <li>Code Completion</li> 
 <li>Jump to Source</li> 
 <li>Undefined Keywords</li> 
 <li>Undefined Resources</li> 
 <li>Undefined Variables</li> 
 <li>Python support</li> 
 <li>Code Inspections</li> 
</ul> 
<p>Find us in <a href="https://github.com/millennialmedia/intellibot" rel="nofollow">Github</a>.</p>]]></description><version>0.6.5</version><vendor email='intellibot@millennialmedia.com' url='http://www.millennialmedia.com'>Millennial Media</vendor><idea-version min="n/a" max="n/a" since-build='107.105' /><change-notes><![CDATA[0.6.5 
<ul> 
 <li>fix resolving of relative imports (thanks to Kidlike)</li> 
 <li>add option to capitalize keywords (thanks to puhnastik)</li> 
</ul> 0.6.4 
<ul> 
 <li>add transitive import support</li> 
 <li>add support for python community version</li> 
 <li>add config page for debug logging</li> 
</ul> 0.6 
<ul> 
 <li>performance improvements</li> 
 <li>enable import not used (resource) by default</li> 
 <li>better handle import file finding</li> 
 <li>some variable handling and inspections</li> 
</ul> 0.5 
<ul> 
 <li>better keyword resolution</li> 
 <li>Minor parser fixes</li> 
</ul> 0.4 
<ul> 
 <li>Added support for ellipsis</li> 
 <li>Updated file icon</li> 
 <li>Added better handling of super space on auto-complete keywords</li> 
 <li>Add better detection around inline variables</li> 
 <li>Added better detection of variable declarations (still not great IDE support)</li> 
 <li>Added some inspections (Gherkin, Import Not Found, Keyword Not Found)</li> 
 <li>Minor parser fixes</li> 
</ul> 0.3 
<ul> 
 <li>Cleaned up some of the recommended syntax</li> 
 <li>Cleaned up where the recommended syntax appears (not perfect but better)</li> 
 <li>Enabled code completion for pycharm python libraries</li> 
 <li>Minor parser fixes</li> 
</ul> 0.2.4 
<ul> 
 <li>added python support for pycharm</li> 
 <li>added code completion for python functions</li> 
</ul> 2014-01-08 
<ul> 
 <li>Added support for Python Libraries; import and jump-to-source</li> 
</ul> 2013-12-24 
<ul> 
 <li>Added support for Variables and User Keywords</li> 
 <li>Local and remote jump-to-source work</li> 
 <li>Local and remote code completion</li> 
 <li>Have address some stack overflow bugs</li> 
</ul> 2013-11-18 
<ul> 
 <li>Initial Release after Hack-a-thon</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>4.7</rating></idea-plugin><idea-plugin downloads='12932' size='21114113' date='1423323248000' url='https://github.com/asciidoctor/asciidoctor-intellij-plugin'><name>AsciiDoc</name><id>org.asciidoctor.intellij.asciidoc</id><description><![CDATA[<p><a href="http://www.methods.co.nz/asciidoc/" rel="nofollow">AsciiDoc</a> language support for IntelliJ platform.</p>
<p> </p>
<p>AsciiDoc is a text document format, similar to formats like Markdown, for writing notes, documentation, articles, books, ebooks, slideshows, web pages, man pages and blogs. AsciiDoc files can be translated to many formats including HTML, PDF, EPUB, man page. AsciiDoc is, in constrast to Markdown, highly configurable: both the AsciiDoc source file syntax and the backend output markups (which can be almost any type of SGML/XML markup) can be customized and extended by the user.</p>]]></description><version>0.8</version><vendor email='erik.pragt@jworks.nl' url='http://asciidoctor.org'>Asciidoctor Project</vendor><idea-version min="n/a" max="n/a" since-build='107.105' /><change-notes><![CDATA[<ul> 
 <li>0.8 Fixed incompatibility with non-IDEA IDE's, thanks to Harro Lissenberg</li> 
 <li>0.7 Added table creation thanks Harro Lissenberg. Also added basic formatting, and fixed IntelliJ 14.1 incompatibility.</li> 
 <li>0.6 Convert from Markdown to AsciiDown. Tooltip background colors fixed thanks to Harro Lissenberg, and error handling fixed thanks to Alexander Schwartz. Thanks!!<br /> Fixed issues: <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/43" rel="nofollow">GITHUB-43</a>, <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/41" rel="nofollow">GITHUB-41</a>, <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/33" rel="nofollow">GITHUB-33</a>. <br /> Also: removed .asc file extension.<br /> </li>
 <li>0.5.1 Bugfix release, see <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/21" rel="nofollow">PULL-21</a></li> 
 <li>0.5 Upgraded to version 1.5.2 of AsciiDoc, and a small bugfix in the styling for bold items.</li> 
 <li>0.4 Upgraded to JRuby 1.7.16.1 to fix bugs, initial Darcula support.<br /> Live preview, relative images and includes fixed, thanks to Alexander Schwartz!<br /> Fixed issues: <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/21" rel="nofollow">GITHUB-21</a>, <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/20" rel="nofollow">GITHUB-20</a>, <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/16" rel="nofollow">GITHUB-16</a>, <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/18" rel="nofollow">GITHUB-18</a>.<br /> </li> 
 <li>0.3 Upgraded to version 1.5.1 of AsciiDoc</li> 
 <li>0.2 Fixed issues: <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/8" rel="nofollow">GITHUB-8</a>, <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/9" rel="nofollow">GITHUB-9</a>, <a href="https://github.com/asciidoctor/asciidoctor-intellij-plugin/issues/10" rel="nofollow">GITHUB-10</a>.<br /> Small cleanup (renamed tab, changed tab sequence) </li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='419' size='61111' date='1396257492000' url=''><name>Coocoo</name><id>com.hoho.coocoo</id><description><![CDATA[Coocoo DSL for MVC applications]]></description><version>0.0.5</version><vendor email='dakota@brokenpipe.ru' url='https://github.com/hoho'>Marat Abdullin</vendor><idea-version min="n/a" max="n/a" since-build='107.105' /><change-notes><![CDATA[Plugin is in early development stage.]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='5738' size='352732' date='1419552424000' url=''><name>Rust</name><id>vektah.rust</id><description><![CDATA[Language support for the 
<a href="http://www.rust-lang.org/" rel="nofollow">Rust Language</a>
<br />
<br /> 
<em>PLEASE NOTE</em>: This does not yet do any auto completion. It is JUST the lexer and highlighting for .rs files. The rest is coming soon!]]></description><version>0.0.4</version><vendor email='adam@vektah.net' url='http://github.com/Vektah/idea-rust'>Vektah</vendor><idea-version min="n/a" max="n/a" since-build='40.131' /><change-notes><![CDATA[<ul> 
 <li><b>0.0.4</b>: Support for rust 0.13, Run cargo from editor, Structure view, Auto commenting, Smart indentation, Create new rust file from editor</li> 
 <li><b>0.0.3</b>: Added expression support, disabled wildcards. Grammar should now be more or less complete</li> 
 <li><b>0.0.2</b>: Added grammar support for functions, structs, use, traits, externals, lets, types, struct tuples and static vars</li> 
 <li><b>0.0.1</b>: Initial plugin</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>4.4</rating></idea-plugin><idea-plugin downloads='22796' size='2698284' date='1425046079000' url=''><name>Haskell</name><id>Haskell</id><description><![CDATA[Haskell language support]]></description><version>0.5.0</version><vendor email='' url='http://www.jetbrains.com/'>JetBrains Inc.</vendor><idea-version min="n/a" max="n/a" since-build='139.225' /><change-notes><![CDATA[<ul> 
 <li>advanced highlighting</li> 
 <li>go to declaration (in progress)</li> 
 <li>find usages (in progress)</li> 
 <li>tool for logging ghc-modi</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><depends>com.intellij.modules.xdebugger</depends><depends>com.intellij.modules.platform</depends><rating>4.1</rating></idea-plugin><idea-plugin downloads='6185' size='103588' date='1402247405000' url=''><name>Latte</name><id>com.jantvrdik.intellij.latte</id><description><![CDATA[Provides support for 
<a href="https://github.com/nette/latte/" rel="nofollow">Latte</a> ‚Äì a template engine for PHP.]]></description><version>0.1.1</version><vendor email='' url=''>Jan Tvrd√≠k</vendor><idea-version min="n/a" max="n/a" since-build='133.326' /><change-notes><![CDATA[<p>0.1.1</p> 
<ul> 
 <li>implemented basic html tags and macros folding</li> 
 <li>typing '}' is ignored when the next character is '}'</li> 
</ul> 
<p>0.1.0-rc1 / 0.1.0</p> 
<ul> 
 <li>selecting attribute macro from code-completion list auto-inserts =&quot;&quot; and put caret inside those quotes</li> 
</ul> 
<p>0.1.0-beta3</p> 
<ul> 
 <li>typing '{' auto-inserts '}'</li> 
</ul> 
<p>0.1.0-beta2</p> 
<ul> 
 <li>fixed minimum required IDEA build number to 133.326</li> 
</ul> 
<p>0.1.0-beta1</p> 
<ul> 
 <li>registering new macro will force re-analyzing of all project files</li> 
</ul> 
<p>0.1.0-alpha7</p> 
<ul> 
 <li>name of closing HTML tag must be the same the opening tag</li> 
 <li>implemented basic commenter</li> 
 <li>hard coded fix for macro _ which can be both pair and unpaired</li> 
</ul> 
<p>0.1.0-alpha6</p> 
<ul> 
 <li>implemented support for custom attribute macros</li> 
 <li>only a single top-level {block} macro can be auto-closed</li> 
</ul> 
<p>0.1.0-alpha5</p> 
<ul> 
 <li>plugin is now really compatible with Java 6</li> 
</ul> 
<p>0.1.0-alpha4</p> 
<ul> 
 <li>implemented support for custom macros</li> 
 <li>macros are auto-closed at end of file</li> 
</ul> 
<p>0.1.0-alpha3</p> 
<ul> 
 <li>plugin should be compatible with Java 6</li> 
 <li>new icon for Latte file</li> 
</ul> 
<p>0.1.0-alpha2</p> 
<ul> 
 <li>fixed macro comment priority when macro comment contained a quote</li> 
</ul>]]></change-notes><depends>com.intellij.modules.lang</depends><rating>4.9</rating></idea-plugin><idea-plugin downloads='4506' size='24257' date='1422124648000' url=''><name>Tree syntax highlighter</name><id>ru.hyoo.jin.tree</id><description><![CDATA[<a href="http://hyoo.ru/?article=%D0%A4%D0%BE%D1%80%D0%BC%D0%B0%D1%82+Tree;author=Nin+Jin" rel="nofollow">Tree</a> - very simple, readable, compact structural format. Better than xml, json, yaml and other.
<br /> 
<a href="https://github.com/nin-jin/tree-plugin" rel="nofollow">Sources: https://github.com/nin-jin/tree-plugin</a>
<br />]]></description><version>1.3</version><vendor email='nin-jin@ya.ru' url='http://hyoo.ru'>Jin</vendor><idea-version min="n/a" max="n/a" since-build='40.131' /><change-notes><![CDATA[better error hlighting]]></change-notes><depends>com.intellij.modules.lang</depends><rating>00</rating></idea-plugin><idea-plugin downloads='28850' size='371564' date='1430750788000' url=''><name>TypoScript Plugin</name><id>de.sgalinski.typoscript.plugin.id</id><description><![CDATA[<img alt="Logo - SGalinski Internet Services" src="http://cdn.sgalinski.de/_Resources/Static/Packages/SGalinski.SgalinskiDe/Images/logo.png" />  
<br />
<br />
<br />
<br />
<br />
<br />
<br /> 
<p> <strong>Please uninstall the TypoScript plugin from Intellij before you install this one, because this combination can lead to crashes and unforeseeable problems.</strong> </p>