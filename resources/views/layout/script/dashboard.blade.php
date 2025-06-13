    <script>
        const ctx = document.getElementById('harvestChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                        label: 'Padi (ton)',
                        data: [0.8, 0.4, 1.4, 0.4, 1.6, 1.2],
                        backgroundColor: '#4ade80',
                        borderRadius: 4
                    },
                    {
                        label: 'Jagung (ton)',
                        data: [0.5, 0.6, 0.3, 1.0, 0.5, 0.8],
                        backgroundColor: '#facc15',
                        borderRadius: 4
                    },
                    {
                        label: 'Sayuran (ton)',
                        data: [0.2, 0.3, 0.2, 0.2, 0.3, 0.2],
                        backgroundColor: '#60a5fa',
                        borderRadius: 4
                    }
                ]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'end',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 8,
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawOnChartArea: false,
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 0.2
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                        }
                    }
                }
            }
        });
    </script>
