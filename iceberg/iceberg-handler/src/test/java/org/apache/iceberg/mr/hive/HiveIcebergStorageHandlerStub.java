/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

package org.apache.iceberg.mr.hive;

import java.util.concurrent.BrokenBarrierException;
import java.util.concurrent.CyclicBarrier;
import java.util.concurrent.TimeUnit;
import java.util.concurrent.TimeoutException;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 * HiveIcebergStorageHandlerStub is used only for unit tests.
 * Currently, we use it to achieve a specific thread interleaving to simulate conflicts in concurrent writes
 * deterministically.
 */
public class HiveIcebergStorageHandlerStub extends HiveIcebergStorageHandler {
  private static final Logger LOG = LoggerFactory.getLogger(HiveIcebergStorageHandlerStub.class);

  @Override
  public HiveIcebergOutputCommitter getOutputCommitter() {

    try {
      LOG.info(" Using HiveIcebergStorageHandlerStub for unit tests");
      if (TestUtilCyclicBarrier.isInstantiated()) {
        CyclicBarrier testUtilCyclicBarrier = TestUtilCyclicBarrier.getInstance(0).getCyclicBarrier();
        LOG.info("Activating the CyclicBarrier for thread: {} ", Thread.currentThread().getName());
        testUtilCyclicBarrier.await(600, TimeUnit.SECONDS);
        LOG.info("Breaking the CyclicBarrier for thread: {} ", Thread.currentThread().getName());
      }
    } catch (InterruptedException | BrokenBarrierException | TimeoutException e) {
      throw new RuntimeException("Barrier failed: ", e);
    }

    return new HiveIcebergOutputCommitter();
  }

}
