import pandas as pd

Room_info=pd.read_excel("Room-info.xlsx")
pd.set_option('display.max_rows',None)
pd.set_option('display.max_columns',None)

Room_for_course_and_section_BSCSE=Room_info[["Room Number","Total Course BSCSE","Total Sections BSCSE "]]
Room_for_course_and_section_MSCSE=Room_info[["Room Number","Total Course MSCSE","Total Sections MSCSE "]]
Room_for_course_and_section_BSEEE=Room_info[["Room Number","Total Course BSEEE","Total Sections BSEEE "]]
Room_for_course_and_section_BBA=Room_info[["Room Number","Total Course BBA","Total Sections BBA "]]

print("All Rooms of BSCSE department")
print(Room_for_course_and_section_BSCSE)

print("All Rooms of MSCSE department")
print(Room_for_course_and_section_MSCSE)

print("All Rooms of BSEEE department")
print(Room_for_course_and_section_BSEEE)

print("All Rooms of BBA department")
print(Room_for_course_and_section_BBA)

print("Occupied Rooms of BSCSE department")
print(Room_for_course_and_section_BSCSE.dropna(axis='rows',how='any'))

print("Occupied Rooms of MSCSE department")
print(Room_for_course_and_section_MSCSE.dropna(axis='rows',how='any'))

print("Occupied Rooms of BSEEE department")
print(Room_for_course_and_section_BSEEE.dropna(axis='rows',how='any'))

print("Occupied Rooms of BBA department")    
print(Room_for_course_and_section_BBA.dropna(axis='rows',how='any'))


print("Most occupied room for BSCSE department = ")  
print(Room_for_course_and_section_BSCSE.loc[Room_for_course_and_section_BSCSE["Total Sections BSCSE "].idxmax()])  
print("Most occupied room for MSCSE department = ")    
print(Room_for_course_and_section_MSCSE.loc[Room_for_course_and_section_MSCSE["Total Sections MSCSE "].idxmax()])  
print("Most occupied room for BSEEE department = ")    
print(Room_for_course_and_section_BSEEE.loc[Room_for_course_and_section_BSEEE["Total Sections BSEEE "].idxmax()])  
print("Most occupied room for BBA department = ")    
print(Room_for_course_and_section_BBA.loc[Room_for_course_and_section_BBA["Total Sections BBA "].idxmax()])  

