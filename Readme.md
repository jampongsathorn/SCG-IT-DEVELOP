## Question 1: System Development

1.1 Online Ordering System
Design and develop an online ordering system with the following components:

- Frontend User Interface (UI)
- Backend User Interface (UI)
- Database

<img width="1356" alt="Ordering Website UI" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/6eccb65f-5e9c-4ea5-9211-0b8020b424ac">



Design Database:
<img width="1088" alt="Design Database" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/f6bc961f-8888-47d6-8ecc-a5a0b5dab667">

Sample Data:
<img width="1269" alt="scgOrders Database" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/b996840a-af61-451c-b35b-b2613d8f2d72">



My Website: https://jampongsathorn.github.io/SCG-IT-DEVELOP/

1.2 Online Sales Report
Design and develop an online sales report that displays the following information:

- Sales actual vs. target comparison
- Sales growth trend over time

<img width="1408" alt="OnlineReport" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/6980606a-74f3-4d27-9a19-4b8bcae56577">

My Online Sales Report Website: https://jampongsathorn.github.io/SCG-IT-DEVELOP/OnlineReport/admin.html

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
  
<img width="1404" alt="Coefficient_matrix" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/8a99a7e7-03a1-41f3-a1f5-42651a820c71">

<img width="1098" alt="Excel Coefficience_matrix" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/d51c5ee6-69a9-4600-a65b-74b533a9f379">



2.2 Correlation for Customer R44
- Question 2.1, specifically find the correlation between products for Customer R44.

<img width="1392" alt="R44_Coefficient_matrix" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/7b9ef974-913a-4270-8bed-a7ad545405a6">

<img width="1015" alt="Excel R44_Cofficient" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/7a417ba7-4fb2-45ab-8cf5-e92d6ea2f368">

## Additional
Interactive Dashboard Visualization:


<img width="1173" alt="R44-Customer-Analysis" src="https://github.com/jampongsathorn/SCG-IT-DEVELOP/assets/85749998/03e8f688-0192-463c-b9a1-5c9a27c6b83a">

Link to Dashbboard:
[https://public.tableau.com/views/SCG-IT-DEVELOPER-DASHBOARD/Dashboard1?:language=en-GB&:display_count=n&:origin=viz_share_link](https://public.tableau.com/views/SCG-IT-DEVELOPER-DASHBOARD/MainDashboard?:language=en-GB&:display_count=n&:origin=viz_share_link)

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


