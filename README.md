# super-duper-octo-doodle
DNS to get Photos published

## Desc

This is a simple Do Nothing Script that will at somepoint process the files more automaticaly for me. from 
taking the import process and creating previes for diffrent sites (personal, flicker, S3) then also publish them to the respective sites as i handle other parts of the development process of each photo.


## SETUP

Install these tools 
[exiftool](https://exiftool.org/)

using this ver ATM: ExifTool-12.22.dmg



## Step Notes

 - 1 get files from SD to S3
 - 2 get S3 to display on flicker?
	- decide if we start with flicker or use picwiko sofware
	- 

## Notes for Steps process

### create preview jpg and store meta data to them


Run this in the Storage/Processed Folder 
`exiftool -b -PreviewImage -w _preview.jpg -ext cr2 -r .`
Run this in the Storage/ Processed Folder
`exiftool -tagsfromfile %d%-.8f.cr2 -all:all -r -overwrite_original -ext jpg .`

Final Step is to move them out of the processed folder both the cr2 / movies / jpgs
-ext cr2
 
`exiftool '-filename<CreateDate' -d ../jpgs/%Y/Week%UDay%dYear%YT-%s%%-c.%%le -r -ext jpg .`
`exiftool '-filename<CreateDate' -d ../raw/%m-%b-%Y/Week%UDay%dYear%YT-%s%%-c.%%le -r -ext cr2 .`
`exiftool '-filename<CreateDate' -d ../movie/%m-%b-%Y/Week%UDay%dYear%YT-%s%%-c.%%le -r -ext mov .`



### Processing file names

we will run this command in the staging root dir this will move them out and get them ready for the next step. ie creating some jpg to show chickens

`exiftool '-filename<CreateDate' -d ../processed/%m-%b-%Y/Week%UDay%dYear%YT-%s.%%le -r .`

Notes on running exiftool for renaming process

This is the base code taken from [here](https://ninedegreesbelow.com/photography/exiftool-commands.html)
`exiftool '-filename<CreateDate' -d %y%m%d_%H%M%S%%-c.%%le -r -ext cr2 -ext mrw /media/ingest/test`


I need to format it to rename with this format 
processed/Month-Year/WeekDayYearTHourMinSec.ext
`exiftool '-filename<CreateDate' -d ../processing/%m-%b-%Y/Week%UDay%dYear%YT-%s%%-c.%%le -r .`


### Process to get from PC to Mac for Upload Process




#### Mac timestamp info
[timestamps for mac](https://developer.apple.com/library/archive/documentation/System/Conceptual/ManPages_iPhoneOS/man3/strftime.3.html) This is usefull info for adapting the stamp settings for the mac, this may need to be updated when this is ran on Linux or Windows.
