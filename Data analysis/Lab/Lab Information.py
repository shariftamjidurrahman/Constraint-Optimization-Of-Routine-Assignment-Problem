import pandas as pd

Lab_info=pd.read_excel("Lab-info.xlsx")
pd.set_option('display.max_rows',None)
pd.set_option('display.max_columns',None)

Lab_for_course_and_section_BSCSE=Lab_info[["Room Number","Total Course BSCSE","Total Sections BSCSE "]]
Lab_for_course_and_section_MSCSE=Lab_info[["Room Number","Total Course MSCSE","Total Sections MSCSE "]]
Lab_for_course_and_section_BSEEE=Lab_info[["Room Number","Total Course BSEEE","Total Sections BSEEE "]]
Lab_for_course_and_section_BBA=Lab_info[["Room Number","Total Course BBA","Total Sections BBA "]]

print("All Labs of BSCSE department")
print(Lab_for_course_and_section_BSCSE)

print("All Labs of MSCSE department")
print(Lab_for_course_and_section_MSCSE)

print("All Labs of BSEEE department")
print(Lab_for_course_and_section_BSEEE)

print("All Labs of BBA department")
print(Lab_for_course_and_section_BBA)

print("Occupied Labs of BSCSE department")
print(Lab_for_course_and_section_BSCSE.dropna(axis='rows',how='any'))

print("Occupied Labs of MSCSE department")
print(Lab_for_course_and_section_MSCSE.dropna(axis='rows',how='any'))

print("Occupied Labs of BSEEE department")
print(Lab_for_course_and_section_BSEEE.dropna(axis='rows',how='any'))

print("Occupied Labs of BBA department")    
print(Lab_for_course_and_section_BBA.dropna(axis='rows',how='any'))

print("Most occupied lab for BSCSE department = ")  
print(Lab_for_course_and_section_BSCSE.loc[Lab_for_course_and_section_BSCSE["Total Sections BSCSE "].idxmax()])  
print("Most occupied lab for MSCSE department = ")    
print(Lab_for_course_and_section_MSCSE.loc[Lab_for_course_and_section_MSCSE["Total Sections MSCSE "].idxmax()])  
print("Most occupied lab for BSEEE department = ")    
print(Lab_for_course_and_section_BSEEE.loc[Lab_for_course_and_section_BSEEE["Total Sections BSEEE "].idxmax()])  
print("Most occupied lab for BBA department = ")    
print(Lab_for_course_and_section_BBA.loc[Lab_for_course_and_section_BBA["Total Sections BBA "].idxmax()])  

