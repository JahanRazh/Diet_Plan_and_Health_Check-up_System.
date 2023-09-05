#include <iostream>
#include <string>

using namespace std;

class Health_checkup
{
    private:
        int checkup_id;
        string checkup_name;
        string checkup_type;
        string doctorname;
        string date;
        string results;

    public:
        void setHealthCheckup(int id, const string& name, const string& type, const string& doctor, string checkupDate, const string& res);
        void displayHealthCheckup();

};

int main()
{
    Health_checkup checkup;
    checkup.setHealthCheckup(1, "Routine Checkup", "General", "Dr. Ruwan ", "2023/05/30", "Normal");
    checkup.displayHealthCheckup();
	
	return 0;
    
}


void Health_checkup::setHealthCheckup(int id, const string& name, const string& type, const string& doctor, string checkupDate, const string& res)
{
    checkup_id = id;
    checkup_name = name;
    checkup_type = type;
    doctorname = doctor;
    date = checkupDate;
    results = res;
}
void Health_checkup::displayHealthCheckup()
{
    // Accessing member variables
    cout << "Checkup ID: " << checkup_id << endl;
    cout << "Checkup Name: " << checkup_name << endl;
    cout << "Checkup Type: " << checkup_type << endl;
    cout << "Doctor: " << doctorname << endl;
    cout << "Date: " << date << endl;
    cout << "Results: " << results << endl;
}

