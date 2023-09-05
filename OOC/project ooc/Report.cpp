#include <iostream>
#include<string>
using namespace std;
class Report
{
	private:
		int Report_id;
		string Report_type;
		string Recommendation;
	public:
		void setgeneratereport(int repid, string Retype, string Recm);
		void reportDetails();
};

int main()
{
	Report dpReport;
	dpReport.setgeneratereport(1, "Diet Plan", "Follow the recommended diet plan strictly.");
	dpReport.reportDetails();

	Report hCReport;
	hCReport.setgeneratereport(2, "Health Check-up", "You are in good health. Continue to follow a healthy lifestyle.");
	hCReport.reportDetails();
	return 0;
}

void Report::setgeneratereport(int repid, string Retype, string Recm)
{
	Report_id =repid;
	Report_type =Retype;
	Recommendation =Recm;
}

void Report::reportDetails()
{
	cout << "Report ID: " << Report_id << endl;
	cout << "Report Type: " << Report_type << endl;
	cout << "Recommendation: " << Recommendation << endl;
}

