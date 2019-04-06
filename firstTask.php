/** MySql 8.* */
SELECT
  RecordId AS RecId, Date, Time, EventId AS EvID, UserId,
    CASE
      WHEN (LEAD(EventId) OVER W = EventId)
        THEN (LEAD(Date) OVER W - Date + 1)
      WHEN (LEAD(EventId) OVER W != EventId AND (SELECT Date FROM first WHERE (RecordId > RecId AND EvID = EventId) LIMIT 1))
        THEN DATEDIFF((SELECT Date FROM first WHERE (RecordId > RecId AND EvID = EventId) LIMIT 1), Date) + 1
      ELSE DATEDIFF(Date, NOW())
    END
AS 'diff'   FROM first WINDOW W AS (ORDER BY Date);
