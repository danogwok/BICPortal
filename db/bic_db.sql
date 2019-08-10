-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 02:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountability`
--

CREATE TABLE `accountability` (
  `AccountibilityID` int(11) NOT NULL,
  `FirmName` varchar(255) DEFAULT NULL,
  `ContactName` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PhysicalAddress` varchar(255) DEFAULT NULL,
  `PostalAddress` varchar(255) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ApplicationID` int(11) NOT NULL,
  `IDDocuments` varchar(10000) DEFAULT NULL,
  `BEECertificate` varchar(1000) DEFAULT NULL,
  `BusinessAgreement` varchar(1000) DEFAULT NULL,
  `BusinessPlan` varchar(1000) DEFAULT NULL,
  `MarketingPlan` varchar(1000) DEFAULT NULL,
  `RegistrationCertificate` varchar(1000) DEFAULT NULL,
  `VATCertificate` varchar(1000) DEFAULT NULL,
  `SARSCertificate` varchar(1000) DEFAULT NULL,
  `FinancialStatement` varchar(1000) DEFAULT NULL,
  `BankStatement` varchar(10000) DEFAULT NULL,
  `EmployeeTaxRegistration` varchar(1000) DEFAULT NULL,
  `UIFCertificate` varchar(1000) DEFAULT NULL,
  `COIDRegistration` varchar(1000) DEFAULT NULL,
  `WaterAccount` varchar(1000) DEFAULT NULL,
  `ElectricityAccount` varchar(1000) DEFAULT NULL,
  `RatesandTaxes` varchar(1000) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `AuditID` int(11) NOT NULL,
  `Audited` varchar(3) DEFAULT NULL,
  `NoAuditReason` varchar(255) DEFAULT NULL,
  `ContactName` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `PhysicalAddress` varchar(255) DEFAULT NULL,
  `PostalAddress` varchar(255) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banking`
--

CREATE TABLE `banking` (
  `BankingID` int(11) NOT NULL,
  `Active` varchar(3) DEFAULT NULL,
  `OpenDate` date DEFAULT NULL,
  `AccountHolderName` varchar(255) DEFAULT NULL,
  `BankName` varchar(255) DEFAULT NULL,
  `AccountNumber` varchar(255) DEFAULT NULL,
  `AccountType` varchar(255) DEFAULT NULL,
  `BranchName` varchar(255) DEFAULT NULL,
  `BranchCode` varchar(255) DEFAULT NULL,
  `BankProof` varchar(1000) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `BeneficiaryID` int(11) NOT NULL,
  `TotalEmployedFull` int(11) DEFAULT NULL,
  `MenFullTime` int(11) DEFAULT NULL,
  `WomenFullTime` int(11) DEFAULT NULL,
  `YouthFullTime` int(11) DEFAULT NULL,
  `SeniorFullTime` int(11) DEFAULT NULL,
  `DisabledFullTime` int(11) DEFAULT NULL,
  `TotalEmployedPartTime` int(11) DEFAULT NULL,
  `MenPartTime` int(11) DEFAULT NULL,
  `WomenPartTime` int(11) DEFAULT NULL,
  `YouthPartTime` int(11) DEFAULT NULL,
  `SeniorPartTime` int(11) DEFAULT NULL,
  `DisabledPartTime` int(11) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `BusinessID` int(11) NOT NULL,
  `TradeName` varchar(255) DEFAULT NULL,
  `RegisteredName` varchar(255) DEFAULT NULL,
  `RegistrationDate` date DEFAULT NULL,
  `RegistrationNumber` varchar(255) DEFAULT NULL,
  `Sector` varchar(255) DEFAULT NULL,
  `IncomeTaxNumber` varchar(255) DEFAULT NULL,
  `VATNumber` varchar(255) DEFAULT NULL,
  `Province` varchar(255) DEFAULT NULL,
  `Town` varchar(255) DEFAULT NULL,
  `Municipality` varchar(255) DEFAULT NULL,
  `Objectives` varchar(1000) DEFAULT NULL,
  `ProductService` varchar(255) DEFAULT NULL,
  `OperationArea` varchar(255) DEFAULT NULL,
  `BusinessDays` varchar(255) DEFAULT NULL,
  `OpenHours` varchar(255) DEFAULT NULL,
  `ClosedHours` varchar(255) DEFAULT NULL,
  `AssetDescription` varchar(1000) DEFAULT NULL,
  `AssetValue` decimal(10,0) DEFAULT NULL,
  `PhysicalAddress` varchar(255) DEFAULT NULL,
  `PostalCode` int(11) DEFAULT NULL,
  `PostalAddress` varchar(255) DEFAULT NULL,
  `PostalAddressCode` int(11) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `LegalStatus` varchar(255) DEFAULT NULL,
  `BusinessDescription` varchar(1000) DEFAULT NULL,
  `PrimaryTargetMarket` varchar(255) DEFAULT NULL,
  `SecondaryTargetMarket` varchar(255) DEFAULT NULL,
  `Evaluated` varchar(1000) DEFAULT NULL,
  `OwnerPhoto` varchar(1000) DEFAULT NULL,
  `ManagementPhoto` varchar(1000) DEFAULT NULL,
  `EmployeePhoto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`BusinessID`, `TradeName`, `RegisteredName`, `RegistrationDate`, `RegistrationNumber`, `Sector`, `IncomeTaxNumber`, `VATNumber`, `Province`, `Town`, `Municipality`, `Objectives`, `ProductService`, `OperationArea`, `BusinessDays`, `OpenHours`, `ClosedHours`, `AssetDescription`, `AssetValue`, `PhysicalAddress`, `PostalCode`, `PostalAddress`, `PostalAddressCode`, `Telephone`, `LegalStatus`, `BusinessDescription`, `PrimaryTargetMarket`, `SecondaryTargetMarket`, `Evaluated`, `OwnerPhoto`, `ManagementPhoto`, `EmployeePhoto`) VALUES
(8, 'Trade T Name', 'Reg Name for Biz', '1956-08-09', '0477843667', 'Agriculture', NULL, NULL, 'Eastern Cape', 'Umtata', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactperson`
--

CREATE TABLE `contactperson` (
  `UserID` int(11) NOT NULL,
  `Cell` varchar(20) DEFAULT NULL,
  `CompetitionExposure` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Diet` varchar(255) DEFAULT NULL,
  `Disability` varchar(255) DEFAULT NULL,
  `ClosestTransport` varchar(255) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feasibility`
--

CREATE TABLE `feasibility` (
  `FeasibilityID` int(11) NOT NULL,
  `YearsOperational` int(11) DEFAULT NULL,
  `FeasibilityPlan` varchar(1000) DEFAULT NULL,
  `AveEmployeeSalary` decimal(10,0) DEFAULT NULL,
  `AveManagementSalary` decimal(10,0) DEFAULT NULL,
  `Strength` varchar(1000) DEFAULT NULL,
  `Weakness` varchar(1000) DEFAULT NULL,
  `Opportunities` varchar(1000) DEFAULT NULL,
  `Threats` varchar(1000) DEFAULT NULL,
  `JobsIn3Months` int(11) DEFAULT NULL,
  `JobsIn6Months` int(11) DEFAULT NULL,
  `JobsIn12Months` int(11) DEFAULT NULL,
  `ImprovementMotivationWinner` varchar(3000) DEFAULT NULL,
  `ImprovementMotivationRunner` varchar(3000) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `funding`
--

CREATE TABLE `funding` (
  `FundingID` int(11) NOT NULL,
  `ReceivedEskomGrant` varchar(3) DEFAULT NULL,
  `FundedDate` date DEFAULT NULL,
  `Amount` decimal(10,0) DEFAULT NULL,
  `FundReason` varchar(1000) DEFAULT NULL,
  `ReceivedOtherFunding` varchar(3) DEFAULT NULL,
  `FunderName` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `AmountFromOther` decimal(10,0) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `InfrastructureID` int(11) NOT NULL,
  `Rooms` decimal(10,0) DEFAULT NULL,
  `PremisesSize` decimal(10,0) DEFAULT NULL,
  `Facilities` varchar(1000) DEFAULT NULL,
  `ExteriorPhoto` varchar(1000) DEFAULT NULL,
  `InteriorPhoto` varchar(1000) DEFAULT NULL,
  `EquipmentPhoto` varchar(1000) DEFAULT NULL,
  `ProductServicePhoto` varchar(1000) DEFAULT NULL,
  `Ownership` varchar(255) DEFAULT NULL,
  `MonthlyAmount` decimal(10,0) DEFAULT NULL,
  `RatesTaxes` decimal(10,0) DEFAULT NULL,
  `WaterCost` decimal(10,0) DEFAULT NULL,
  `ElectricityCost` decimal(10,0) DEFAULT NULL,
  `ElectricityType` varchar(255) DEFAULT NULL,
  `ElectricityPhase` varchar(255) DEFAULT NULL,
  `ElectricitySupplier` varchar(255) DEFAULT NULL,
  `ClosestOffice` varchar(255) DEFAULT NULL,
  `CompanyAccountNumber` varchar(255) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `ManagementID` int(11) NOT NULL,
  `Qualifications` varchar(1000) DEFAULT NULL,
  `IDNumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `propertyowner`
--

CREATE TABLE `propertyowner` (
  `PropertyOwnerID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `LeaseContract` varchar(1000) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SalesID` int(11) NOT NULL,
  `MonthlyIncomeSales` decimal(10,0) DEFAULT NULL,
  `SalesExpenses` decimal(10,0) DEFAULT NULL,
  `SalesTotal` decimal(10,0) DEFAULT NULL,
  `ProductionCosts` decimal(10,0) DEFAULT NULL,
  `Profits` decimal(10,0) NOT NULL,
  `BusinessID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shareholder`
--

CREATE TABLE `shareholder` (
  `ShareholderID` int(11) NOT NULL,
  `IDNumber` varchar(255) DEFAULT NULL,
  `SharePercentage` decimal(10,0) DEFAULT NULL,
  `Qualifications` varchar(1000) DEFAULT NULL,
  `StakeholderID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signatories`
--

CREATE TABLE `signatories` (
  `SignatoryID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `BankingID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `Initials` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder`
--

CREATE TABLE `stakeholder` (
  `StakeholderID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `FormalSkills` varchar(1000) DEFAULT NULL,
  `StakeholderType` varchar(255) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `targetmarket`
--

CREATE TABLE `targetmarket` (
  `MarketID` int(11) NOT NULL,
  `NeedsMet` varchar(1000) DEFAULT NULL,
  `KeyCustomers` varchar(255) DEFAULT NULL,
  `MarketStrategy` varchar(1000) DEFAULT NULL,
  `PotentialCustomers` varchar(255) DEFAULT NULL,
  `Competition` varchar(255) DEFAULT NULL,
  `UniqueProposition` varchar(255) DEFAULT NULL,
  `MaterialsDescription` varchar(1000) DEFAULT NULL,
  `AuthoritySupport` varchar(3) DEFAULT NULL,
  `AuthorityName` varchar(255) DEFAULT NULL,
  `AuthorityPerson` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(255) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `undertaking`
--

CREATE TABLE `undertaking` (
  `UndertakingID` int(11) NOT NULL,
  `InitialsSurname` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `DATE` varchar(255) DEFAULT NULL,
  `BusinessID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Usertype` int(11) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `inActive` int(11) NOT NULL DEFAULT '1',
  `isDeleted` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `type_id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`type_id`, `type`) VALUES
(1, 'admin'),
(2, 'judge'),
(3, 'competitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountability`
--
ALTER TABLE `accountability`
  ADD PRIMARY KEY (`AccountibilityID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ApplicationID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`AuditID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `banking`
--
ALTER TABLE `banking`
  ADD PRIMARY KEY (`BankingID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`BeneficiaryID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`BusinessID`),
  ADD UNIQUE KEY `TradeName` (`TradeName`),
  ADD UNIQUE KEY `RegisteredName` (`RegisteredName`);

--
-- Indexes for table `contactperson`
--
ALTER TABLE `contactperson`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `feasibility`
--
ALTER TABLE `feasibility`
  ADD PRIMARY KEY (`FeasibilityID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `funding`
--
ALTER TABLE `funding`
  ADD PRIMARY KEY (`FundingID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`InfrastructureID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`ManagementID`);

--
-- Indexes for table `propertyowner`
--
ALTER TABLE `propertyowner`
  ADD PRIMARY KEY (`PropertyOwnerID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SalesID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `shareholder`
--
ALTER TABLE `shareholder`
  ADD PRIMARY KEY (`ShareholderID`),
  ADD KEY `StakeholderID` (`StakeholderID`);

--
-- Indexes for table `signatories`
--
ALTER TABLE `signatories`
  ADD PRIMARY KEY (`SignatoryID`),
  ADD KEY `BankingID` (`BankingID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD PRIMARY KEY (`StakeholderID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `targetmarket`
--
ALTER TABLE `targetmarket`
  ADD PRIMARY KEY (`MarketID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `undertaking`
--
ALTER TABLE `undertaking`
  ADD PRIMARY KEY (`UndertakingID`),
  ADD KEY `BusinessID` (`BusinessID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Usertype` (`Usertype`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `type_id` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountability`
--
ALTER TABLE `accountability`
  MODIFY `AccountibilityID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ApplicationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `AuditID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banking`
--
ALTER TABLE `banking`
  MODIFY `BankingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `BeneficiaryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `BusinessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feasibility`
--
ALTER TABLE `feasibility`
  MODIFY `FeasibilityID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funding`
--
ALTER TABLE `funding`
  MODIFY `FundingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `InfrastructureID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propertyowner`
--
ALTER TABLE `propertyowner`
  MODIFY `PropertyOwnerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SalesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signatories`
--
ALTER TABLE `signatories`
  MODIFY `SignatoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stakeholder`
--
ALTER TABLE `stakeholder`
  MODIFY `StakeholderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `targetmarket`
--
ALTER TABLE `targetmarket`
  MODIFY `MarketID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undertaking`
--
ALTER TABLE `undertaking`
  MODIFY `UndertakingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accountability`
--
ALTER TABLE `accountability`
  ADD CONSTRAINT `accountability_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `audit`
--
ALTER TABLE `audit`
  ADD CONSTRAINT `audit_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `banking`
--
ALTER TABLE `banking`
  ADD CONSTRAINT `banking_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD CONSTRAINT `beneficiary_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `contactperson`
--
ALTER TABLE `contactperson`
  ADD CONSTRAINT `contactperson_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `contactperson_ibfk_2` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `feasibility`
--
ALTER TABLE `feasibility`
  ADD CONSTRAINT `feasibility_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `funding`
--
ALTER TABLE `funding`
  ADD CONSTRAINT `funding_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD CONSTRAINT `infrastructure_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `management`
--
ALTER TABLE `management`
  ADD CONSTRAINT `management_ibfk_1` FOREIGN KEY (`ManagementID`) REFERENCES `stakeholder` (`StakeholderID`);

--
-- Constraints for table `propertyowner`
--
ALTER TABLE `propertyowner`
  ADD CONSTRAINT `propertyowner_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `shareholder`
--
ALTER TABLE `shareholder`
  ADD CONSTRAINT `shareholder_ibfk_1` FOREIGN KEY (`StakeholderID`) REFERENCES `stakeholder` (`StakeholderID`);

--
-- Constraints for table `signatories`
--
ALTER TABLE `signatories`
  ADD CONSTRAINT `signatories_ibfk_1` FOREIGN KEY (`BankingID`) REFERENCES `banking` (`BankingID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `stakeholder` (`StakeholderID`);

--
-- Constraints for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD CONSTRAINT `stakeholder_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `targetmarket`
--
ALTER TABLE `targetmarket`
  ADD CONSTRAINT `targetmarket_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `undertaking`
--
ALTER TABLE `undertaking`
  ADD CONSTRAINT `undertaking_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Usertype`) REFERENCES `usertype` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
