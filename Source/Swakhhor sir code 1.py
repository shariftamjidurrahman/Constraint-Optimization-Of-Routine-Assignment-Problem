import pandas as pd
import random
template = pd.read_excel('https://github.com/swakkhar/RoutineAssignment/blob/master/ClassRoutine-template.xlsx?raw=true')
teachers = pd.read_excel('https://github.com/swakkhar/RoutineAssignment/blob/master/Teachers.xlsx?raw=true')
rooms=pd.read_excel('Room.xlsx')
sections=pd.read_excel('Sections.xlsx')
#print("Room infos : ",rooms)
#print("Section infos : ",sections)

# lets decide the variables
no_of_faculty =  teachers.shape[0] # number of faculty members
teachers=teachers.fillna(0) # fill all NaN by 0
faculty_names = teachers["Faculty Member"].values.tolist()  # Faculty Names
theory_limit=teachers["Theory"].values.tolist() # limit of theory 0 if none
lab_limit=teachers["Lab"].values.tolist() # limit of labs 0 if none


# set global limits
max_course_limit=6
max_credit_limit=14
min_credit_limit=10
print("Number of faculty = ",no_of_faculty)


no_of_courses = template.shape[0]
taken = [0] * no_of_courses

course_codes =  template["FormalCode"].values.tolist()
sections = template["SectionName"].values.tolist()
room = template["Room1"].values.tolist()
day1 = template["Day1"].values.tolist()
day2 = template["Day2"].values.tolist()
time1 = template["Time1"].values.tolist()
credits=[]

final_faculty_list=[]

## find out credits from course codes
for code in course_codes:
  c=(code.split(" ")[1].split("."))[0]
  if int(c)%2==0:
    credits.append(1)
  else:
    credits.append(3)
print("Credits for each course : ")    
print(credits)

startTime=[]
endTime=[]
for duration in time1:
  tokens=duration.split("-")
  start=tokens[0]
  end = tokens[1]
  start=start.rstrip()
  start=start.lstrip()
  
  end=end.rstrip()
  end=end.lstrip()
  
  m=start.split(":")
  if m[2]=="AM":
    startTime.append(int(m[0])*100+int(m[1]))
  else:
    startTime.append(int(m[0])*100+1200+int(m[1]))
  
  m=end.split(":")
  if m[2]=="AM":
    endTime.append(int(m[0])*100+int(m[1]))
  else:
    endTime.append(int(m[0])*100+1200+int(m[1]))
   
print("Start Time of course : ")    
print(startTime)
print("End Time of course : ")
print(endTime)
print("Length of Start Time of course : ")
print(len(startTime))
print("Length of End Time of course : ")
print(len(endTime))
    

assigned_teacher=template["Teacher1"].values.tolist()

print("assigned teachers")
print(assigned_teacher)
# clear all assignments
for i in range(no_of_courses):
    assigned_teacher[i]=0
    
print(assigned_teacher)
def isValid(s):
  # in this function we need to check whether the solution s violates any hard constraints
  # we have got random faculty members assigned in each course 
  # lets populate courses for each faculty
  faculty_course_list={}
  for i in range(no_of_courses):
    if s[i] in faculty_course_list:
      if taken[i] == 0:
        print("Checking validity in if")  
        list=faculty_course_list[s[i]]
        print(list)
        list.append(i)
        print(list)
        faculty_course_list[s[i]]=list
        taken[i] = 1
        print(faculty_course_list[s[i]])
    else:
      if taken[i] == 0:
        print("Checking validity in else")  
        list=[i]
        print(list)
        faculty_course_list[s[i]]=list
        taken[i] = 1
        print(faculty_course_list[s[i]])
  
  return True

def quality(s):
  # in this function we need to check whether the solution s violates any soft constraints
  # we have got random faculty members assigned in each course 
  # lets populate courses for each faculty
  faculty_course_list={}
  for i in range(no_of_courses):      
    if s[i] in faculty_course_list:
      print("Checking quality in if")  
      list=faculty_course_list[s[i]]
      list.append(i)
      faculty_course_list[s[i]]=list
    else:
      print("Checking qaulity in else")
      list=[i]
      faculty_course_list[s[i]]=list
      
  return True
  
  # now we have got course list for each of the faculty members, now lets check conflicts
  # lets first check if the total courses exceeds global limit

def generateRandomValid():
  s=[]
  faculty_course_list={}
  for i in range(no_of_courses):
    while(True):
      f=random.randrange(no_of_faculty)
      if f in faculty_course_list:
        print("in if: ")
        list=faculty_course_list[f]
        # print(list)
        if len(list)<max_course_limit:
          list.append(i)
          faculty_course_list[f]=list
          # print(faculty_course_list[f])
          s.append(f)
          # print(s)
          break
      else:
        # print("in else: ")
        list=[i]
        # print(list)
        faculty_course_list[f]=list
        # print(faculty_course_list[f])
        s.append(f)
        # print(s)
        break
  print(faculty_course_list)
  return s

def RandomNeighborhoodSearch(maxIter):
  # lets create an initial solution
  s = generateRandomValid()

  if isValid(s) and quality(s):
    print("Validated: ")
    return s
          
    
    
  
final_faculty_list = RandomNeighborhoodSearch(1000)

print(final_faculty_list)
assigned_faculty_names=[]
for i in range(no_of_courses):
  assigned_faculty_names.append(faculty_names[final_faculty_list[i]])


dataOut=pd.DataFrame(
    {'Course Code': course_codes,
     'Section': sections,
     'room': room,
     'Time': time1,
     'Day1': day1,
     'Day2': day2,
     'Faculty': assigned_faculty_names
    })
        
print(dataOut)
dataOut.to_excel("output.xlsx")
    