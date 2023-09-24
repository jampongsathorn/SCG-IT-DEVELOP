## Question 1: System Development

1.1 Online Ordering System
Design and develop an online ordering system with the following components:

- Frontend User Interface (UI)
- Backend User Interface (UI)
- Database

My Website: https://jampongsathorn.github.io/SCG-IT-DEVELOP/

1.2 Online Sales Report
Design and develop an online sales report that displays the following information:

- Sales actual vs. target comparison
- Sales growth trend over time

## Question 2: Data Analytics

2.1 Correlation Analysis
- Please perform a correlation analysis between products in a given dataset (sheet data1). Provide a detailed explanation of the solution you implement to find these correlations.

Using Excel:
1. Explore Data: start by understanding the relationships between the columns in your dataset, especially the relationships between Customers, SaleOrders, Materials, and Pieces. For example, each customer row can have multiple SaleOrder entries.
2. Create a PivotTable in Excel to prepare the data for correlation analysis. Set "Material" as the column field and "Pieces" as the value field. Additionally, create a filter for the "Customer" column, which allows you to select either all customers or a specific customer of interest.
3. Apply Excel's analytical tools by navigating to "Data" -> "Data Analytics" -> "Correlation" and select the appropriate data range.
4. Interpret the results. Values closer to 1 indicate a strong positive correlation, values closer to -1 indicate a strong negative correlation, and values close to 0 suggest little to no linear correlation.

Using Tableau:


5. Import the data into Tableau Public.
6. In Tableau Public, use calculated fields to calculate correlation and adjust interactive dashboard.
7. Finally, revisit and validate your findings with Excel to ensure the accuracy of the data and results.

Link to Dashbboard:
https://public.tableau.com/shared/GR6BFDGSM?:display_count=n&:origin=viz_share_link
  
<img width="1404" alt="Coefficient_matrix" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/37c83655-7ef0-4a59-ba32-dc88e7f43d19">

<img width="1098" alt="Screenshot 2566-09-22 at 18 38 20" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/197853cc-31f7-47ac-81c4-20bbfff4b576">


2.2 Correlation for Customer R44
- Question 2.1, specifically find the correlation between products for Customer R44.

<img width="1392" alt="R44_Coefficient_matrix" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/0f90d2f2-0d64-43e2-ad8c-baaa32b6a8e8">

<img width="1015" alt="Screenshot 2566-09-22 at 18 44 38" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/7bba6280-5118-4d5a-97d5-14e510d4f93c">

## Additional
Interactive Dashboard Visualization:


<img width="1000" alt="R44-Customer-Analysis" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/5e77d78f-ca5f-498a-ba61-09380e2df2fb">

Link to Dashbboard:
https://public.tableau.com/views/SCG-IT-DEVELOPER-DASHBOARD/Dashboard1?:language=en-GB&:display_count=n&:origin=viz_share_link

Customer R44 has ordered a total of 5.4 million pieces of materials. 
The top three materials they purchased are as follows: 
- material_000226: 1.21 million pieces ordered
- material_000148: 0.83 million pieces ordered
- material_000024: 0.21 million pieces ordered
  
Over the period from 2013 to 2018, they placed a total of 1577 orders for these materials.

Notably, their highest order quantities were in the years:
- 2015 (1.16 million pieces)
- 2017 (1.13 million pieces)
- 2014 (0.93 million pieces)


