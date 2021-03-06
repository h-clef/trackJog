# trackjog

Get access to clean, simply-formatted data from your GPS watch.

## Data format

**trackjog** uses a MySQL database with two tables: *points* and *routes*.

### *points*
| id  | latitude     | longitude     | time                | flag  |
|-----|--------------|---------------|---------------------|-------|
| 989 | 42.508045036 | -71.118871053 | 2020-06-22 18:20:00 | start |
| 990 | 42.508053166 | -71.118853200 | 2020-06-22 18:20:01 | NULL  |
| 991 | 42.508064901 | -71.118817912 | 2020-06-22 18:20:02 | NULL  |
| 992 | 42.508076468 | -71.118791341 | 2020-06-22 18:20:03 | NULL  |
| 993 | 42.508090466 | -71.118758149 | 2020-06-22 18:20:04 | NULL  |

### *routes*
| timestamp           | start_point | stop_point | distance |
|---------------------|-------------|------------|----------|
| 2020-06-22 11:08:54 |         989 |       3919 |     6112 |
| 2020-06-22 12:00:34 |        3920 |       6953 |     4302 |
| 2020-06-23 12:27:46 |        6954 |      10554 |     7184 |
| 2020-06-23 13:03:46 |       10555 |      12697 |     3145 |
| 2020-06-24 18:33:20 |       12698 |      20006 |    10320 |

## Contact
[Matthew Rumizen](mailto:matthew.rumizen@gmail.com) - developer
