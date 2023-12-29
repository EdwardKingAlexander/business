<script setup>
import DashboardHeader from '@/Components/Admin/Dashboard/DashboardHeader.vue';
import DesktopTransactionsTable from '@/Components/Admin/Dashboard/Expenses/DesktopTransactionsTable.vue';
import MobileTransactionTable from "@/Components/Admin/Dashboard/Expenses/MobileTransactionTable.vue";
import InventoryCard from "@/Components/Admin/Dashboard/Inventory/InventoryDashboardCard.vue";
import CrmCard from "@/Components/Admin/Dashboard/CRM/CrmDashboardCard.vue";
import ExpenseCard from "@/Components/Admin/Dashboard/Expenses/ExpenseDashboardCard.vue";
import CropsCard from "@/Components/Admin/Dashboard/Crops/CropsDashboardCard.vue";
import TasksCard from "@/Components/Admin/Dashboard/Tasks/TasksDashboardCard.vue";
import ProjectTrackerCard from "@/Components/Admin/Dashboard/ProjectTracker/ProjectTrackerDashboardCard.vue";


defineProps({
  transactions: {
    type: Object,
    required: true
  },
});

</script>

<template >
  <main class="flex-1 pb-8">
    <!-- Page header -->
    <DashboardHeader />

    <div class="mt-8">
      <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2>
        <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Cards -->

          <ProjectTrackerCard />



          <TasksCard />



          <CropsCard />



          <InventoryCard />



          <CrmCard />



          <ExpenseCard />

          <!-- More cards... -->
        </div>
      </div>

      <h2 class="mx-auto mt-8 max-w-6xl px-4 text-lg font-medium leading-6 text-gray-900 sm:px-6 lg:px-8">Recent Expenses
      </h2>

      <!-- Activity list (smallest breakpoint only) -->
      <DesktopTransactionsTable :transactions="transactions" />

      <!-- Activity table (small breakpoint and up) -->
      <MobileTransactionTable :transactions="transactions" />
    </div>
  </main>
</template>